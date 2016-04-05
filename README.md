gameplaycolor.com
=================

Building
--------

```bash
cd site
jekyll build
```

Testing
-------

```bash
cd site
jekyll serve
```

Deploying
---------

```bash
jekyll build \
    --source site \
    --destination site/_site
cd ansible
ansible-playbook gameplaycolor.yml
```

Application Icons
-----------------

- Icon: 200px x 200px
- Shadow: 256px x 256px
