<?php
/** CarbonTune 7.0
  * This is the configuration file for this app.
  * Edit this file with your own settings and save it.
  *
  * IMPORTANT: Edit and save this file in plain ASCII text
  * using a text editor like Visual Studio Code or Notepad++
  *
  * Please note that this app requires both Festify and Spotify, third-party, 
  * services. Visit festify.rocks and spotify.com respectively to learn more.
  * Festify nor Spotify endorse or sponsor nor are these parties otherwise 
  * involved with this project. All trademarks are property of their respective owners.
  *
  * Made by Nathan Dick - www.ygco.ca
  * Copyright (C) 2019-2020 Nathan Dick. All Rights Reserved.
  *
  * Read the documentation for more on this file - https://github.com/ndi8093/CarbonTune/wiki
  *
  * ALL of these constants are required for the app to function as intended.
  */

 /** 
 * Festify URLs
 * See the documentation for info on how to find these links.
 * This app WILL NOT WORK without them.
 */

 define('TVMODE_URL', 'https://festify.us/tv/-Liok9Sbts2KOoU8YuI4');
 define('RQAREA_URL', 'https://festify.us/party/-Liok9Sbts2KOoU8YuI4');
 
/**
 * Display Board Settings
 * Add messages to the display boards. See the documentation for more.
 */
 define('PARTY_MESSAGE_TOPRIGHT', '<strong>Network: </strong>MyAwesomeParty</strong><br><strong>Password: </strong>1234');
 define('PARTY_MESSAGE_BOTTOMRIGHT', 'Enjoy the Party');
 define('PARTY_MESSAGE_BOTTOMRIGHT_2', 'Welcome to New York');

/** 
 * ControllerUI Song Request Link
 * Displays on the Queue Viewer screens
 * By default, it is set to https://example.com/song
 * If you changed the default location, you're using a short link or a different setup, enter it below.
 * This link is used by both the Mobile request UI and the Kiosk UI by default.
 * See the documentation for more information.
 */

 define('REQUEST_LINK', 'https://getcarbontune.com/mysong'); 

/**
  * Enable/Disable Song Requests
  * Use this to turn song requests on or off.
  * Set to 'true' (on) by default. See documentation for more.
  */
 define('GUEST_REQUESTS_ENABLE', 'false');

/**
 * Request System Overrides
 * Enable this to allow selected people (usually hosts) to continue to put songs into the queue even if requests are closed.
 * Works at all times, regardless of whether the main song requests area is enabled or disabled.
 * Set to 'true' (on) by default. 
 * 
 * @since 7.0.0 Access is restricted to users with a PIN, which is defined below. The PIN is blank by default.
 * 
 * Generate a suitable PIN here: https://www.random.org/strings/?num=1&len=8&digits=on&unique=on&format=html&rnd=new
 * 
 */

  define('ALLOW_CLOSURE_OVERRIDES', 'true');
  define('ACCESSCODE', '22022011373824');

/**
 * @since 7.0.0
 * Song Request Countdown
 * Enable this to create a countdown for song requests to open. 
 * This will display a countdown in hours and minutes until song requests open.
 * 
 * GUEST_REQUESTS_ENABLE must be set to true.
 * 
 */

  //Enable Countdown
  define('ENABLE_COUNTDOWN', 'true');

  //Define the time when song requests should open. See documentation for details on formatting.
  define('COUNTDOWN_TO', '');

  //This will display on the screen when song requests will open. (e.g.: 8:00pm)
  define('OPEN TIME', '');
  
?>