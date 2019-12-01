---
layout: content
title: Frequently Asked Questions
---

1. [Where can I download games?](#games)
2. [How do I add games?](#add)
3. [How do I add artwork?](#artwork)
4. [How do I change the console color?](#color)
5. [Can I save games with Game Play Color?](#save)
6. [Does Game Play Color support .sav files?](#snapshots)
7. [Are there any plans to add link cable support?](#multiplayer)
8. [Why aren't my games showing up?](#missing)
9. [Why does my game restart every time I switch apps?](#background)

---

<a id="games"></a>

### Where can I download games? <a class="permalink" href="#games">∞</a>

While we cannot officially recommend any single site for downloading Game Boy and Game Boy Color ROMs, we suggest using [Google](https://google.com) to search for ROMs by title.

_Please remember that downloading copied ROMs is illegal: only use images for ROMs you own._

<p class="faq-top"><a href="#">&#8613; Back to the top</a></p>

---

<a id="add"></a>

### How do I add games? <a class="permalink" href="#add">∞</a>

You can add games to Game Play Color by one of two mechanisms:

1. **Using a Mac or PC**

    1. [Download](#games) or create an image of the ROM you wish to play.

       <img src="/images/ss_add_download.png" width="855px" height="522px">

    2. If the ROM is compressed (usually indicated by a **.zip** extension) double-click it to extract it. This should leave you with a **.gb** or **.gbc** file.

       <img src="/images/ss_add_extract.png" width="855px" height="522px">

    3. Sign in to [Google Drive](https://drive.google.com) on your Mac or PC.

       <img src="/images/ss_add_drive.png" width="855px" height="522px">

    4. Drag-and-drop your downloaded ROM (**Shantae.gbc** in our example) into Google Drive.

       <img src="/images/ss_add_upload.png" width="855px" height="522px">

    5. Google Drive should show a progress bar during the upload and a message when it has completed (e.g. **Shantae.gbc has been uploaded to Games** in our example).

       <img src="/images/ss_add_complete.png" width="855px" height="522px">

    6. Launch Game Play Color on your iOS device by tapping the **Game Play** icon on your home screen. Sign in to Google Drive if prompted.

    7. Show the game library by tapping on the emulator screen. Your newly uploaded game should be visible in the library.

       <img src="/images/ss_add_library_new.png" width="375px" height="667px">

    8. Tap the game once to start downloading. A spinner will appear to indicate that the download is in progress.

       <img src="/images/ss_add_library_download.png" width="375px" height="667px">

    9. When the download is complete, the game will change colour and the spinner will disappear.

       <img src="/images/ss_add_library_downloaded.png" width="375px" height="667px">

    10. Tap the game to again to start playing.

        <img src="/images/ss_add_play.png" width="375px" height="667px">


2. **Using your iPhone, iPod or iPad**

   The great guys over at [OPERATIONiDROID](https://www.youtube.com/channel/UCrSGNNsPxE-qsqoqnkFZHBg) and [iEmulators](http://iemulators.com) have produced a video explaining one of the many techniques available for getting ROMs into Game Play Color using just your iOS device:

   <iframe width="560" height="315" src="https://www.youtube.com/embed/Eoaq6HVvxY0" frameborder="0" allowfullscreen></iframe>

<p class="faq-top"><a href="#">&#8613; Back to the top</a></p>

---

<a id="artwork"></a>

### How do I add artwork? <a class="permalink" href="#artwork">∞</a>

1. Add some ROMs to Game Play Color as described [above](#add).

2. Download a **JPEG** (.jpg) of the cover art for your ROM you wish to add artwork to.

   <img src="/images/ss_artwork_download.png" width="855px" height="522px" />

3. Rename the file to match the name of the ROM.

   In our example, our ROM file is entitield **Shantae.gbc**, so we rename the artwork to **Shantae.jpg**.

   <img src="/images/ss_artwork_rename.png" width="855px" height="522px" />

4. Sign in to [Google Drive](https://drive.google.com).

5. Drag-and-drop the artwork file into Google Drive.

   <img src="/images/ss_artwork_upload.png" width="855px" height="522px">

6. Google Drive should show a progress bar during the upload and a message when it has completed

   (e.g., **Shantae.jpg has been uploaded to Games** in our example).

   <img src="/images/ss_artwork_uploaded.png" width="855px" height="522px" />

7. Launch Game Play Color on your iOS device and show the game library by tapping on the emulator screen. After a few moments, your ROM should display the game artwork.

   <img src="/images/ss_artwork_complete.png" width="375px" height="667px" />

<p class="faq-top"><a href="#">&#8613; Back to the top</a></p>

---

<a id="color"></a>

### How do I change the console color? <a class="permalink" href="#color">∞</a>

<img src ="/images/ss_colors.png" />

Like the original Game Boy Color, Game Play Color is available in a range of colors. You can change these from the **Settings** dialog.

<p class="faq-top"><a href="#">&#8613; Back to the top</a></p>        

---

<a id="save"></a>

### Can I save games with Game Play Color? <a class="permalink" href="#save">∞</a>

Yes. Game Play Color supports saving games as implemented in the original ROMs. Simply save each game as you would on an original Game Boy or Game Boy Color.

_For example, to save your game in **Pokémon**, tap **Select** during game-play, select **SAVE** from the menu, then choose **YES** to save._

Note: Saved games are currently stored on the device and are not backed up to Google Drive. Removing Game Play Color from your home screen will delete your saved games. We're exploring saving game state on Google Drive in future updates.

<p class="faq-top"><a href="#">&#8613; Back to the top</a></p>        

---

<a id="snapshots"></a>

### Does Game Play Color support .sav files? <a class="permalink" href="#snapshots">∞</a>

Many emulators offer a way to snapshot the emulator state and store this as a .sav file. While Game Play Color [supports saving games](#save), save state is stored locally on each device and there is currently no support for saving or loading snapshots.

We've have had a lot of requests for this feature and it's something we're exploring for future updates to Game Play Color.

We're tracking this as [Issue #46](https://github.com/gameplaycolor/gameplaycolor/issues/46) on GitHub.

<p class="faq-top"><a href="#">&#8613; Back to the top</a></p>        

---

<a id="multiplayer"></a>

### Are there any plans to add link cable support? <a class="permalink" href="#multiplayer">∞</a>

We know lots of you would love to trade Pokémon (and we're keen to play a bit of two-player Tetris ourselves). We're therefore planning to add link cable support in a future release.

We're tracking this as [Issue #55](https://github.com/gameplaycolor/gameplaycolor/issues/55) on GitHub.

<p class="faq-top"><a href="#">&#8613; Back to the top</a></p>

---

<a id="missing"></a>

### Why aren't my games showing up? <a class="permalink" href="#missing">∞</a>

Game Play Color should automatically update to show any **.gbc** or **.gb** files you [add to Google Drive](#add).

If your games are not appearing, check that you haven't mistakenly added Game Boy Advance (.gba) ROMs, as these are currently [unsupported](#devices).

If you have zipped Game Boy or Game Boy Color ROMs (**.zip**), you will need to unzip these before they will appear.

Check out our guide on [adding games](#add) for more help.

<p class="faq-top"><a href="#">&#8613; Back to the top</a></p>

---

<a id="background"></a>

### Why does my game restart every time I switch apps? <a class="permalink" href="#background">∞</a>

Unfortunately, due to the limitations of iOS, it's not possible to know when web applications (like Game Play Color) are about to be backgrounded. This means we are unable to automatically take a snapshot when you switch apps (e.g., to reply to a text message, take a phone call, etc).

Game Boy Color games which support saving will correctly [remember your last save](#save), but Game Boy games will be restarted.

We hope to add support for manual restore points in future versions of Game Play Color which should help mitigate this issue.


<p class="faq-top"><a href="#">&#8613; Back to the top</a></p>
