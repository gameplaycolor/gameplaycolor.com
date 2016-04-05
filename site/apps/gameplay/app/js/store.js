/*
 * Copyright (C) 2012-2013 InSeven Limited.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */
 
(function($) {

  App.Store = function(name) {
    this.init(name);
  };
  
  App.Store.Property = {
    STATE: 0,
    GAME:  1
  };
  
  jQuery.extend(App.Store.prototype, {

    init: function(name) {
      var self = this;
      self.name = name;
      self.database = undefined;
      
      try {
        if (!window.openDatabase) {
          alert('Databases are not supported in this browser.');
        } else {
          self.database = openDatabase(self.name, '1.0', self.name, 100000);
          self.createTables();
        }
      } catch(e) {
        if (e == 2) {
          // Version number mismatch.
          console.log("Invalid database version.");
        } else {
          console.log("Unknown error " + e + ".");
        }
      }

    },
    
    createTables: function() {
      var self = this;
      self.database.transaction(
        function(transaction) {
          transaction.executeSql("CREATE TABLE IF NOT EXISTS " +
                                  "properties( " +
                                    "key TEXT NOT NULL PRIMARY KEY, " +
                                    "value TEXT NOT NULL " +
                                  ");");
        }
      );
    },
    
    setProperty: function(key, value) {
      var self = this;
      self.database.transaction(
        function(transaction) {
          transaction.executeSql(
            "INSERT OR REPLACE INTO properties (key, value) VALUES ('" + key + "', '" + value + "')"
          );
        }
      );
    },
    
    property: function(key, callback) {
      var self = this;
      self.database.transaction(function(tx) {
        tx.executeSql(
          "SELECT * FROM properties WHERE key = '" + key + "'",
          [],
          function(transaction, results) {
            if (results.rows.length > 0) {
              callback(results.rows.item(0).value);
            } else {
              callback(undefined);
            }
          },
          function(error) {
            callback(undefined);
          }
        );
      });
    },

    deleteProperty: function(key) {
      var self = this;
      self.database.transaction(function(tx) {
        tx.executeSql(
          "DELETE FROM properties WHERE key = '" + key + "'"
        );
      });
    },

    keys: function(callback) {
      var self = this;
      self.database.transaction(function(tx) {
        tx.executeSql(
          "SELECT key FROM properties",
          [],
          function(transaction, results) {
            var rows = [];
            for (var i = 0; i < results.rows.length; i++) {
              rows.push(results.rows.item(i).key);
            }
            callback(rows);
          },
          function(error) {
            callback(undefined);
          }
        );
      });
    }

  });

})(jQuery);
