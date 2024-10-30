=== Create by Mediavine ===
Contributors: mediavine
Donate link: https://www.mediavine.com
Tags: create, recipe, recipe card, how to, schema, seo
Requires at least: 5.2
Tested up to: 6.6.2
Requires PHP: 7.2
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Complete tool for creating and publishing recipes and other schema types on your site.

== Description ==

= A Plugin for Bakers. Makers. Adventure-takers. =
Top in tech, speed, and SEO so you can focus on what you do best and CREATE.

Now you can craft multiple Google Schema.org types using just one plugin.

* Recipes
* How-to guides and craft instructions
* Lists and round-ups
* More to come!

Now: Automatically calculate nutritional data for your recipes for free.

[youtube https://www.youtube.com/watch?v=OmtqDGi3Nc4]

= Create is for... =

**Recipes** — Easily import content from other plugins. Includes free nutrition calculator and video embeds.
**Lists and round-ups** — Showcase images, links and more in a user-friendly manner.
**How-to guides** — Display beautiful printable materials lists, instructions and videos for DIYs, crafts and more.

= Create by Mediavine was built with the following in mind: =
**1. Speed**
Lightweight, with our strong focus on site speed

**2. Optimized for SEO**
Full Google Rich Snippet support and one-button schema validation so content is marked up for mobile search carousels

**3. Easy to Use**
Built for optimal user experience, for you and your readers

**4. Top-notch Importers**
Easily transfer your content from other recipe plugins

**5. Multiple Themes**
Five gorgeous themes by Purr Design with more on the way

**6. Ad-Ready**
Fully monetize your content using the most-ad-optimized themes

**7. Matches your site**
All themes mimic your site's unique design so no two look the same

**8. Live Preview**
See your content how it will appear on your site, in real time, with full Gutenberg support

**9. Mobile First**
Responsively designed to engage the majority of your audience

== Installation ==

= Minimum Requirements =

* PHP version 5.4.45 or greater (PHP 7.2 or greater is recommended)
* MySQL version 5.5 or greater (MySQL 5.6 or greater is recommended)

= Automatic Installation =

1. Go to Plugins > Add New
1. Type "Create by Mediavine" in the search field and click "Search Plugins"
1. Click "Install Now" to install and then click "Activate"
1. Go to Settings > Create by Mediavine and choose your card style
1. [Register your Create plugin](https://help.mediavine.com/create-by-mediavine/how-to-register-your-create-plugin)
1. If using another recipe card plugin and you'd like to import your recipes from that plugin, [download and install the Mediavine Recipe Importers utility](https://www.mediavine.com/mediavine-recipe-importers-download)

= Manual Installation =

1. [Download a copy of the "Create by Mediavine" plugin](https://downloads.wordpress.org/plugin/mediavine-create.latest-stable.zip)
1. Upload `mediavine-create` to the `/wp-content/plugins/` directory
1. Activate the plugin through the "Plugins" menu in WordPress
1. Go to Settings > Create by Mediavine and choose your card style
1. [Register your Create plugin](https://help.mediavine.com/create-by-mediavine/how-to-register-your-create-plugin)
1. If using another recipe card plugin and you'd like to import your recipes from that plugin, [download and install the Mediavine Recipe Importers utility](https://www.mediavine.com/mediavine-recipe-importers-download)

For more, please see our [help center](https://help.mediavine.com/create-by-mediavine).

== Frequently Asked Questions ==

= How do I import my existing recipes? =

[Download and install the Mediavine Recipe Importers utility](https://www.mediavine.com/mediavine-recipe-importers-download)

= Which recipe card plugins does the importer support?

* Cookbook
* EasyRecipe
* Meal Planner Pro Recipes
* Purr Recipe Cards
* Simple Recipe Pro
* WP Recipe Maker
* WP Tasty
* WP Ultimate Recipe
* Yummly
* Zip Recipes
* ZipList Recipe Plugin

= How will the cards display? =
Our cards are displayed using a WordPress shortcode.

This means that if the plugin is disabled, the recipes themselves will not display on the front end of a blog post. This is typical behavior for most WordPress plugins.

If the plugin is deactivated, no data will be deleted and reactivating the plugin will restore the original card display.

= Will I be able to add nutritional data? =

Yes! Nutritional data is an important part of Schema, which search engines love to have for optimal results.

Nutrition facts can be manually entered for a recipe. They will also transfer over if the recipe already contains it.

We also provide automatic nutrition calculation through our partnership with [Nutritionix](http://nutritionix.com/). [Learn more about this feature](http://help.mediavine.com/create-by-mediavine/auto-calculate-nutrition-with-create-by-mediavine).

= How much does it cost? =

Create is free to the blogging community at large. You do not need to be a Mediavine publisher to use it. All core functions of the plugin will always remain free.

There may be features in the future that would need a license for a fee, but the core functionalities will always remain free and supported for everyone — including plugin updates to keep Create in compliance with WordPress releases.

= Where do I report security bugs found in this plugin? =
Please report security bugs found in the source code of the Create by Mediavine plugin through the [Patchstack Vulnerability Disclosure Program](https://patchstack.com/database/vdp/mediavine-create). The Patchstack team will assist you with verification, CVE assignment, and notify the developers of this plugin.

== Screenshots ==

1. Choose between Recipe, How-To and List cards. (More types coming soon.)
2. Refreshed interface design provides a better user experience.
3. View all of your cards at a glance in the Create card gallery.
4. Search and sort all of your cards for easy editing.
5. Create SEO-ready Recipe cards in minutes.
6. A published Recipe card using the Hero Image card style.
7. A published Recipe card using the Simple Square card style.
8. Our automatic nutrition calculator saves you time and headaches.
9. Publish beautiful lists and round-ups with the List card type.
10. A published List card using the Big Image layout.
11. A published List card using the Circles layout.
12. How-to cards can be used for any kind of instructional guide.
13. A published How-To card on the Dark Classy Circle card style.
14. A published How-To card on the Hero Image card style.
15. Add recommended products to your Recipe and How-To cards.
16. All card styles adapt to your site's existing design.

== Changelog ==

Log may include ticket numbers in [brackets] for internal reference.

= 1.9.11 =
* FIX: Fixes author dropdown to include WP author names
* REMOVE: Removes unused code

= 1.9.10 =
* FIX: Re-adds edit review functionality after patching Reviews API endpoints

= 1.9.9 =
* FIX: Patches potential sensitive data exposure vulnerability through Reviews API

= 1.9.8 =
* FIX: Patches potential XSS security vulnerability

= 1.9.7 =
* FIX: Fixes schema parsing error on ingredients with partial links
* FIX: Adjusts Journey by Mediavine check logic for first recipe ad
* FIX: Taxonomy permalink redirect

= 1.9.6 =
* FEATURE: Adds opt-in setting to Allow Anonymous Ratings for 4 and 5 star reviews, with a review prompt after submission to encourage engagement
* FIX: Patches critical security vulnerability and hardens database calls
* FIX: Fixes issue where first recipe card ad did not appear on sites with Journey by Mediavine

= 1.9.5 =
* REMOVAL: Removes Always Enable Review Popup setting as reviews are now required for every rating
* FIX: Patches security vulnerability involving REST endpoints

= 1.9.4 =
* FIX: Fixes issue where resetting Create settings would fatal on PHP 8

= 1.9.3 =
* FIX: Adds more reliable fix to WYSIWYG editor on Chrome 105+ [715]

= 1.9.2 =
* FIX: Fixes issue where WYSIWYG editor is broken on Chrome 105+ [715]

= 1.9.1 =
* FIX: Corrected issue with rating stars not displaying properly [698]

= 1.9.0 =
* ENHANCEMENT: Remove custom ad wrapper and Ad Density setting [114, 326]
* ENHANCEMENT: Update integration with Mediavine Control Panel (MCP) [475]
* ENHANCEMENT: Update minimum PHP version to 7.2 (from 7.1) [311]
* FIX: Deprecation notices may appear when using PHP 8.0 [39]

= 1.8.2 =
* FIX: Corrects Create image generation so that Create-specific image sizes are generated _only_ when added to a card

= 1.8.1 =
* FIX: Recipe Instructions missing on Print page [614]
* FIX: List Circle images off-center on desktop and mobile [621]
* FIX: Remove extra CSS classes
* ENHANCEMENT: Dismiss admin notifications permanently [548]

= 1.8.0 =
* FEATURE: Hands Free Mode [54]
* FEATURE: Reset Create settings button [154]
* FEATURE: "Leave a review" CTA (call to action) [157]
* FEATURE: Setting to inherit font sizes from theme [159]
* ENHANCEMENT: More descriptive "no access" error for non-admins [84]
* ENHANCEMENT: Warn when permalink configuration is set to default [158]
* ENHANCEMENT: Warn the Ad Density Setting will be removed in 1.9.0 [348]
* ENHANCEMENT: Improve translations support [356]
* ENHANCEMENT: Remove always-blank category from Lists in Gallery view [491]
* FIX: Space below title bar in Gutenberg blocks since 1.7.0 [37]
* FIX: Set explicit width & height on header image in Create cards [45]
* FIX: Link to help doc on non-shortened Amazon Links [53]
* FIX: MCP integration issues with "MVP" tab being blank or shown incorrectly [67, 106, 269]
* FIX: Cards have scraped URLs duplicated "below the fold" [88]
* FIX: Internal list items missing “Extra Info” in preview [95]
* FIX: Internal list item search ignoring "title only" and some "types" options [97]
* FIX: Descriptions of the "Jump To Recipe" button settings [125]
* FIX: Rapid clicks of submit button could create duplicate reviews [128]
* FIX: Post title cut off in Create editor dropdowns [175]
* FIX: "Custom Affiliate Message" ignores "Show" checkbox [177]
* FIX: "Description is required" pop up notice missing on List Items [178]
* FIX: Long "Extra Info" not reliably rendering on Cards [233]
* FIX: List Ads may stack in-content ad units [238]
* FIX: Missing nutrition update prompt after changing ingredient list or servings [263]
* FIX: Ad slot above Recommended Content left-aligned on large screens [264]
* FIX: Entered title not being pulled into New Cards [272]
* FIX: Page becomes unresponsive editing a linked ingredient in 'Bulk' section of Recipe [345]
* FIX: Allowed Types setting is not being respected in Block editor [347]
* FIX: Recommended Product image reverting to original Amazon image [370, 419]
* FIX: Recommended Products added manually aren't saving [465]
* FIX: Performance issue when saving very long Lists [431, 448]
* FIX: New users unable to use Nutritional Calculator [447]
* FIX: Cards should not be able to be added and published as a widget block [480]
* FIX: Adding Create items to a post gives an error [482]
* FIX: Broken special characters in the admin UI [484]
* FIX: Review CTA (call to action) not allowing 4 or 5 stars without comments [533]
* FIX: Incorrect prompt to recalculate nutrition on recipe card [536]
* COSMETIC: "What's the title of your _?" prompt hidden by text input [66]
* COSMETIC: Genesis — Style issue with Print button on Recipe Cards (Genesis conflict) [65]
* COSMETIC: Rank Math SEO causes Create header gap [121]
* COSMETIC: Trellis — List & Card layout selection not updating without Critical CSS purge [131]
* COSMETIC: Trellis — Styling rules conflicting for list images [470]
* COSMETIC: Ad slot above Recommended Content can be off-center [201]
* COSMETIC: "Jump To Recipe" link style can be too wide [278]
* COSMETIC: Amazon images sometimes have blank space around the list image [471]

= 1.7.5 =
* FIX: Compatibility issue with the Create Importer tool in Gutenberg
* FIX: Fixes issue with Amazon Recommended Products disappearing in Create cards

= 1.7.4 =
* FIX: Compatibility issue with the Create Importer tool

= 1.7.3 =
* FIX: Correct conflict with JTR button and certain non-Genesis themes

= 1.7.2 =
* ENHANCEMENT: Allows pubs to translate the admin of Create if desired
* ENHANCEMENT: Streamlined database calls to prevent max queries errors
* FIX: Corrected issue with links disappearing in Lists
* FIX: Corrected issue with Recommended Products getting duplicated on card and live post (Recipe, How-to)
* FIX: Corrected duplicating list items
* FIX: MV Video isn't searchable in 1.7
* FIX: Sentry creating fatal errors in WP dashboard
* FIX: Registration receives hard bounce and 404's for new users
* FIX: Issue where a user may not be able to duplicate a Card
* FIX: Fixed issues saving Recommended Products in Recipes and How-tos
* FIX: "Use Schema" checkbox enabled after edits made to cards

= 1.7.1 =
* FIX: Correct conflict with JTR button and Genesis themes

= 1.7.0 =
* ENHANCEMENT: Improve error messaging for bad scrape urls.
* ENHANCEMENT: Order by ascending when "Title" is selected.
* FIX: Resolved issue where Amazon images were disappearing in pre-existing List cards.
* FIX: Fixes issue with list images not being downloaded during the link scrape.
* FIX: Add http status checks to prevent image from being processed.
* FIX: Fixed missing Card Styles thumbnails.
* FIX: Re-adds missing times when set to display on a list item.
* FIX: Fix issue where internal recipes aren't pulling in descriptions from the Create card.
* FIX: Fix issue where calculating nutrition wipes out custom disclaimer.
* FIX: Fix issue with empty CPT options.
* FIX: Fix issue where images can be pasted into the list title inputs.
* FIX: Fix bug where products are getting duplicated.
* FIX: Remove description from external lists.
* FIX: Prevent sending request when there isn't a search term.
* FIX: Avoid CLS errors on recipe ads with explicit heights in the placeholders.
* FIX: Prevent Recommended Products from downloading Amazon images to the Media Library.
* FIX: Adjust SQL query to include post type when searching for internal items in Lists.
* FIX: Add conditional check for text elements to prevent duplicate links from displaying in list schema.
* COSMETIC: Update optimize button tooltip.
* COSMETIC: Fix sticky header in collection and editor views.
* COSMETIC: Update collection view so the title of the card is easily viewable.
* COSMETIC: Remove some vertical space from the add new card views.
* COSMETIC: Render the list of post outside of a dropdown in list collection view.
* COSMETIC: Updated dark theme aggressive buttons CSS to a darker hover-state color.

= 1.6.7 =
* FEATURE: Adds Skip to Recipe and Skip to How-To links for screen readers.
* FEATURE: Adds Output JSON-LD Schema in Head setting. When setting is enabled, JSON-LD schema will be output in <head> tag instead of within the card's markup. Also, when multiple lists are rendered on a post, the JSON-LD schema will be combined into a single schema object for all matching canonical lists.
* FIX: Adds rel="noopener noreferrer" attribute to social call-to-action links
* FIX: Fixes issue where star ratings in Create cards were causing CLS
* FIX: Corrects help doc link when expanded Amazon link error appears
* FIX: Fixes issue with links disappearing in Lists when adding similar Amazon urls
* FIX: Adds THA-enabled theme support for Jump to Card buttons
* FIX: Adds no-pin attribute to Amazon images in Lists
* FIX: Prevents rare race condition when associating categories with cards

= 1.6.6 =
* FIX: Prevents PHP notices from showing up when plugin is upgraded
* FIX: Fixes issue with Always Enable Review Popup setting
* FIX: Improves database performance when pulling reviews
* FIX: Corrects parsing of external and internal link text on lists
* COSMETIC: Removes extra character from Numbered List style

= 1.6.5 =
* FEATURE: Add support for custom post types in Lists
* FIX: Fix accessibility issue where button elements (focusable) with `aria-hidden="true"` was causing issues for screen readers
* FIX: Fix admin accessibility issue so toggles are now high contrast if the Enable High Contrast setting is enabled
* FIX: Remove calls to missing CSS and JS map files
* FIX: Corrected a rare PHP undefined index notice
* FIX: Only load Create meta block if there's support for it, fixing issue with imports
* FIX: Fix card review validation bugs and add asterisks to review title and content labels
* FIX: Update to latest Trellis hook (`tha_entry_before`) for Jump-to-Card insertion
* FIX: Amazon links can now be manually added to lists if original scrape fails
* FIX: Block Pin button from outputting if Pin URL is pointing to pinterest.com
* FIX: Remove old unused settings from database
* FIX: Display seconds for card times if needed
* FIX: Normalize nutrition of reimported recipes
* FIX: Show custom nutrition disclaimer and custom affiliate message in admin previews
* FIX: Prevent Shortpixel webp images from breaking Create card's featured image
* FIX: Restored functionality of Single Ad Density setting
* FIX: Fix issue where the custom affiliate message wasn't displaying properly on List cards
* FIX: Fix issue where nutrition wouldn't save for sites that were on the first generation of Create betas
* FIX: Re-adds missing times when set to display on a list item
* FIX: Show the register prompt in single product view if the user isn't registered
* FIX: Add rel="nofollow" to buttons in list items that require it
* FIX: Exclude Create's inline JS from WP Rocket's combined javascript
* FIX: Fix missing Card Styles thumbnails
* FIX: Fix issue where other plugins adding output to Gutenberg editor was causing Create cards to crash in Gutenberg
* FIX: Pre-populates card title on new cards in Gutenberg editor
* FIX: Fix issue where a user could not specify a custom thumbnail for Amazon links
* COSMETIC: Adjust optimize button tooltip language
* COSMETIC: Mediavine ads will never be floated on smaller screens

= 1.6.4 =
* FIX: Fixes an authorization bug with Mediavine Control Panel 2.4.0, which prevented videos from being added to cards.

= 1.6.3 =
* FEATURE: Add support for custom Jump To Recipe placement inside themes
* FEATURE: Add Intercom chat widget directly inside the Create app!
* FIX: Disable nofollow on external List items by default
* FIX: Require review title and content for low ratings
* FIX: Render reviews styling on page load for paginated comments
* FIX: Update usage of routing functions to remove PHP Notice
* FIX: Prevent GumGum from applying ads to Create product images
* FIX: Prevent WPRM from deleting converted Create cards
* FIX: Exclude Lists from Comment Ratings Field Pro ratings
* FIX: Fix external list scrape error

= 1.6.2 =
* FIX: Fixes issue where domains with "alt" in the name were losing their featured image
* FIX: In List cards, the Pinterest button now uses the Pinterest fields of each item
* FIX: Optimizes revisions deletion on publish, improving admin performance
* FIX: Fixes retrieval of Create card custom fields
* FIX: Adds method and target to form tag for AMP support
* FIX: Moves Jump to Card button outside of content on Trellis and Genesis themes
* FIX: Corrects an issue where ordered and unordered lists were not appearing correctly in description text
* FIX: Fixes `mv_create_print_card_style` filter
* FIX: Removes automatic download of Amazon product link images
* FIX: Corrects a problem in Circle layout lists where the wrong image ratio is used
* FIX: Sets alt attributes on list images to blank as they are for decorative purposes only
* FIX: Adds position, URL, and Images to recipe instruction JSON-LD schema
* FIX: Adjusts slugs of old Create cards, preventing redirection conflicts with Yoast SEO Premium
* COSMETIC: Buttons in card previews are now consistent with theme
* COSMETIC: Sets base colors for review forms

= 1.6.1 =
* FIX: Removes `noreferrer` attribute from external links as it causes conflicts with Amazon Affiliate links
* FIX: Fixes performance timeouts caused by overly large revisions tables by temporarily removing card revision limits

= 1.6.0 =
**Social Footers**
The primary feature of the 1.6 Create release is the addition of a social sharing footer. Encourage your followers to share your cards on Facebook, Instagram, or Pinterest!

* To enable this setting, register your plugin if you haven't already. Then, go to "Pro" settings. Click the Enable Social Footer checkbox. Then select the default service, enter your usernames, and update the text you want displayed on the cards.
* Social footers can be adjusted on a per card basis user the Custom Fields section in the admin for each card.

**Other Changes**
Additionally, we have some other features and improvements.

* FEATURE: Create now _only_ generates additional image sizes when an image is added to a card, saving disk space
* FEATURE: Adds setting to select which Create image sizes should never be generated
* FEATURE: You can prevent images within cards from being pinned by adding `no-pin="true"` to the shortcode `[mv_img]` so it will look something like `[mv_img id="100" no-pin="true"]`
* FEATURE: Adds `noopener noreferrer` to external links
* FEATURE: Limits the number of revisions a given card can have
* FIX: Adds language localization support for Prep, Cook, and Additional Time labels
* FIX: Fixes over-expanding of traditional nutrition display
* FIX: Prevents nutrition disclaimer from appearing within traditional nutrition display
* FIX: Improves notices when an Amazon Product Advertising API error occurs, with the goal of providing more specific error messages
* FIX: Updates image tags to have better data attributes for Pinterest
* FIX: Prevents fatal errors when deleting recommended products
* FIX: Improves front-end javascript performance
* FIX: Prevents unnecessary database calls from backend requests
* COSMETIC: Removes unnecessary text on card Previews

= 1.5.10 =
* FIX: Improves compatibility with eStore and AmaLinks Pro plugins

= 1.5.9 =
* FIX: Adjusts namespaces of 3rd-party scripts to prevent ALL conflicts between our Amazon implementation and other plugins
* FIX: Fixes issue where some Amazon affiliate keys were permanently set as provisioning
* FIX: Better error prevention for older versions of WordPress and PHP
* FIX: Prevents app from crashing when a list item was initially added as a revision of a post

= 1.5.8 =
* ENHANCEMENT: Adds minor UI improvements to Gutenberg
* ENHANCEMENT: Adds "Add Manually" link to any Amazon error when adding an Amazon link to a list
* ENHANCEMENT: Improves warning messages from incorrect Amazon credentials
* ENHANCEMENT: Card author fields can now have more than 30 characters
* ENHANCEMENT: Better normalization for Amazon keys when pasting into a field
* ENHANCEMENT: Adds review button near the comments/reviews tab
* ENHANCEMENT: Cards rendered in the first viewport will have full styles instead of waiting on scroll
* ENHANCEMENT: Auto-calculated zero nutrition values for Net Carbs and Sugar Alcohols will not display. Global and per card settings added to enable.
* ENHANCEMENT: Numbered list items without an image are styled and no longer overlap into descriptions
* FIX: Adds proper error message and deactivates plugin instead of fatal on PHP 5.3
* FIX: Fixes an issue where removing the canonical post of a card didn't adjust the canonical post
* FIX: Print card pages are now compatible with DMS theme
* FIX: Escapes quotes in and truncates Pinterest descriptions to prevent Pin button errors
* FIX: Improves reliability of UI with older cards
* FIX: Reviews tab will now load if jump to comments button is clicked
* FIX: Colors on Hero lists are corrected to match rest of description area

= 1.5.7 =
* FIX: Fixes fatal conflict with more plugins using older version of Guzzle
* FIX: Restores star ratings to default color of gold instead of black
* FIX: Fixes a slow query related to the Amazon API feature

= 1.5.6 =
* FIX: Fixes fatal conflict with plugins using older version of Guzzle

= 1.5.5 =
* FIX: Fixes issue with manually adding list items
* FIX: Fixes fatal conflict with other Amazon WordPress plugins

= 1.5.4 =
* ENHANCEMENT: Adds support for Amazon Affiliates in recommended products
* FIX: Fixes issue where old beta Create cards were preventing post from saving in the Classic Editor
* FIX: Half star ratings render correctly on cards
* FIX: List items again respect internal and external link settings

= 1.5.3 =
* FIX: List items with numbered style are clickable again

= 1.5.2 =
* FIX: Fixes an issue where older videos caused cards to not render

= 1.5.1 =
* ENHANCEMENT: Prevents some 3rd-party plugins from affecting Create card previews
* ENHANCEMENT: Front-end renders now support IE11 with custom colors
* ENHANCEMENT: Admin UI display improvements
* ENHANCEMENT: Better display of Mediavine ads on JTC click
* ENHANCEMENT: Tweaks list markup for better SEO
* ENHANCEMENT: Improves error messages for unscraped external list items
* FIX: Reviews section no longer pushes down comments with white space on front-end render
* FIX: Correct resolution image displays on Big Hero card renders
* FIX: Fixes issue where pre-1.0 users couldn't edit recommended products

= 1.5.0 =
**Jump To Card**
We heard you! The primary addition of the 1.5 Create release is the addition of Jump To Card links within posts. In order to make this feature great, we worked to optimize placement of Mediavine ads within cards when users click the jump button. We understand the value of great reader experiences, so we made sure to mitigate potential issues with ad viewability for publishers who enable this feature. (If you're not a Mediavine publisher, you have nothing to worry about here!)

* To enable this setting, register your plugin if you haven't already. Then, go to "Pro" settings. Click the Jump To Card checkbox. That's it!
* Links will automatically be added to the top of posts – no need to add them manually!
* Links can be disabled on a post-by-post basis with the "Disable Jump To Recipe" control in the Create sidebar. Note that this feature requires Gutenberg – refer to our Gutenberg help guide if you need to install Gutenberg].
* Buttons can be one of three styles – a link, or a solid or hollow button. Buttons can either use gray or – if you've enabled custom colors for your cards – your primary color. Both of these settings can be adjusted from the "Pro" tab.

Other Changes
Additionally, we have some other features and improvements.

* New color picker: We've replaced the primary and secondary color selection tools with a text field that allows hex input, as well as some nice defaults.
* Video schema improvements: Videos added to Create cards will now include video data as part of the Recipe or How-To schema instead of adding standalone Video schema, preventing duplicate schema issues. Schema is nice, but just to a limit!
* Rating display: We fixed a bug that caused some sites to display inaccurate ratings within cards.
* Ad display improvements: We fixed a bug that would cause Mediavine ads to always render after cards at the very end of posts, regardless of whether or not they should.
* Performance enhancements: We've sped up the way cards render on a page, helping to increase page load performance.

= 1.4.19 =
* ENHANCEMENT: Adds screen reader only text to Pinterest button
* ENHANCEMENT: Better ad previews on live card preview
* ENHANCEMENT: Adds option to disable ads between list items
* ENHANCEMENT: Mediavine ads are centered within cards when rendered on smaller devices
* ENHANCEMENT: Images added to Instructions and Notes now render in live card preview
* FIX: Authors with no display name are filtered out from author dropdown, and all authors appear in How-To dropdown
* FIX: Fixes issue where recommended products were not always reordering properly
* FIX: Highlighting an inline link and editing no longer causes the modal to disappear immediately after render
* FIX: Firefox cursor no longer jumps to beginning of text line
* FIX: Ampersands look correct in live card preview
* FIX: Mediavine ads appear on grid list cards
* FIX: Current user's capabilities are properly checked when custom permissions set in Create Settings
* FIX: Product thumbnail images can now be changed without requiring a page refresh
* FIX: Fixes issue where publish button would stay disabled after publishing
* COSMETIC: Classy Circle cards now have centered descriptions

= 1.4.18 =
* ENHANCEMENT: Updates video JSON-LD to match latest GSC requirements
* ENHANCEMENT: Adds anchor tags to list item titles
* ENHANCEMENT: Adds floating arrows to move through recipes in admin
* ENHANCEMENT: Increases admin performance by removing unnecessary admin enqueues
* ENHANCEMENT: Adjusts Mediavine ad logic
* ENHANCEMENT: Removes brackets from detail view ingredients when the link is deleted

= 1.4.17 =
* ENHANCEMENT: Adds support for WP Accessibility Helper plugin on print page
* ENHANCEMENT: Prevents canonical post from being selected as a list item
* ENHANCEMENT: Adds global default list button texts to dropdown
* FIX: Normalizes apostrophes in WYSIWYG shortcodes
* FIX: Improves display of primary image in card preview
* FIX: Prevents errors on sites with older versions of Mediavine Control Panel
* FIX: Images are now equally sized when viewing list with Grid style on mobile
* FIX: Fixes "Choose from existing" link when editing card from a post
* FIX: JSON-LD improvements to instructions anchor links
* FIX: Disables nutrition calculation with ranged servings and adds tooltip notice
* FIX: Fixes lists so the headings respect selected setting
* FIX: Makes sure Mediavine ads are never placed in header
* FIX: Supports "ugly" permalinks
* FIX: Pinterest button location settings properly respected
* FIX: Moves affiliate disclaimer above recommended products
* FIX: JSON-LD schema now properly displays when canonical is second card on post

= 1.4.16 =
* FIX: Ad Hint Conflict
* FIX: Prevents Mediavine ads from loading in Recommended Products
* FIX: Nutrition calculate button no longer disabled when Create registered

= 1.4.15 =
* ENHANCEMENT: Loads admin font from CDN, reducing plugin file size
* FIX: Fixes issue with card creation on older versions of PHP (below 7.0.13) with `opcache` disabled
* FIX: Pinterest button on cards again works when Mediavine Control Panel is activated
* FIX: Prevents too many Mediavine ads from loading in rare circumstances
* FIX: Front-end reviews by visitors no longer appear clickable

= 1.4.14 =
* ENHANCEMENT: Ads for Mediavine publishers are now generated more reliably within instructions
* ENHANCEMENT: The ability to rate a recipe with a half star has been removed
* ENHANCEMENT: Video thumbnails are now displayed in a card's preview
* ENHANCEMENT: Messaging for errors when adding list items is now more descriptive
* ENHANCEMENT: 3/4 and 2/5 are now options in the Special Characters selection modal
* FIX: Ads for Mediavine publishers are no longer placed at the end of Lists
* FIX: Brings in custom thumbnails on Mediavine videos
* FIX: List items pointing to a subdomain now appear in JSON-LD
* FIX: Fix issue where categories haven't been selected
* FIX: Prevent duplicate list items
* FIX: Fix issue where an additional line break was insterted while adding materials
* FIX: JSON-LD anchor link for How-To cards now links to correct step
* FIX: Adding a card to a post can no longer create duplicates if publish button is double clicked
* FIX: Adding a list item to a list will now always place the item in the correct spot
* FIX: Correctly round the aggregate rating in the JSON-LD output
* FIX: Clicking the print button on a card more reliably brings up the print dialog

= 1.4.11 =
* ENHANCEMENT: Manual Nutrition fields for Net Carbs and Sugar Alcohols
* FIX: List's support for pages
* FIX: Check for Server support of PHP Extenstions xml and mbstring
* FIX: Issue where logged in users couldn't use external links services
* FIX: Insert products at the beginning of the list
* FIX: Ensure updates to Products would propogate across the site
* FIX: Possible issue with reviews if comments were empty
* FIX: Possible issue with upgrading mv_recipe shortcodes to mv_create shortcodes
* FIX: Issue where number of servings wasn't updated in API request
* FIX: Surface Nutrition API Error to UI

= 1.4.10 =
* ENHANCEMENT: List items can now easily be added between others, and all items can be collapsed with a button
* ENHANCEMENT: Better filter support in admin
* ENHANCEMENT: Pasting content into WYSIWYG now retains formatting
* ENHANCEMENT: Admin notice displayed if outdated Mediavine Recipe Importer plugin is found
* ENHANCEMENT: Featured images pulled from a website for a list will provide a notice if they weren't downloaded
* ENHANCEMENT: Warning is provided when a new category is about to be added
* ENHANCEMENT: Setting added to remove popup review prompt on ratings above 4 stars
* ENHANCEMENT: Filter `mv_create_ratings_prompt_threshold` can be returned with a number for a different popup review prompt threshold
* ENHANCEMENT: Filter `mv_create_ratings_submit_threshold` can be returned with a number for a different required review for rating level (Default is 4)
* ENHANCEMENT: You can now add an internal page as a list item
* ENHANCEMENT: JSON-LD can be disabled on individual How-To cards.
* FIX: Minor bugs with WYSIWYG editor
* FIX: Fix bugs when pasting ingredient URLs with extra spaces
* FIX: Amazon links now properly save in the URL field for external list items
* FIX: Hero Lists now render longer titles properly on mobile devices
* FIX: Fix issues with certain UI elements improperly overlapping others
* FIX: Cleaner deletion of reviews through admin
* FIX: Remove style descrepancy of descriptions in cards
* FIX: Ingredients now display in the correct order in the card preview
* FIX: Fix issue where blank settings were being created on a few sites
* FIX: Fix issue with reordering list items through the use of buttons
* FIX: Google Search Console will no longer error when there are multiple How-To cards on a post

= 1.4.9 =
* ENHANCEMENT: WYSIWYG editors now support hard line breaks in lists with the use of Shift+Enter
* ENHANCEMENT: Card ratings modal now has a close button
* FIX: Detail editor no longer has disappearing text of previous ingredients when editing another
* FIX: Styled text in WYSIWYG can now be edited after initial publish
* FIX: List items and ingredients no longer disappear when reordering
* FIX: When the importers plugin is active, the re-importer works again with the new 1.4 UI

= 1.4.8 =
* ENHANCEMENT: Filter `mv_generate_intermediate_sizes_return_early` can be returned false to disable image regeneration of older images
* ENHANCEMENT: Set default ingredients view to bulk instead of detail
* FIX: Fix issue where card style setting was incorrect from older versions of Create
* FIX: Reviews now display the correct date/time, with absolute time in a tooltip
* FIX: Safari users can now edit list descriptions in Classic and Gutenberg editors
* FIX: Adding an image no longer will break list format in instructions
* FIX: Custom nutrition disclaimer is now used, falling back to global setting
* FIX: Image picker no longer refreshes page when importing a recipe
* FIX: Shortcodes with IDs of deleted cards will no longer attempt to render
* FIX: Fix obscure bug with JSON-LD output on custom PHP installs
* FIX: Fix bug with styled instruction content disappearing

= 1.4.7 =
* FIX: Images display in instructions again
* FIX: Fixed an issue where instruction content was disappearing
* FIX: Editing a card no longer removes content in the Classic Editor if another shortcode exists
* FIX: Support again for versions 4.7-4.9 of WordPress

= 1.4.6 =
* FIX: Fix issue where admin UI wasn't displaying for some people
* FIX: Safari users can now edit list descriptions
* FIX: Nested modals such as adding videos and links no longer break in Gutenberg
* FIX: Ingredients are saved in the correct order

= 1.4.5 =
* Versions 1.4.0-1.4.4 were for beta testing

* We hired a designer! The admin has been re-skinned. (We love you, Kat!)
* Changes to List UI: Lists now support text in between items.
* Changes to video: new videos will include duration data in schema.
* Changes to products: Products use our services API, which improves reliability of image scraping.
* Changes to autosave: Autosave actions will occur more predictably.
* Improves size and performance of client-side JavaScript.

New features:
* Cards can now use your brand colors! Go to Settings > Display and click "enable" under "Colors."
* Changes to instructions: The Instructions UI limits content to those which are best for SEO. Existing content can be optimized using the "Optimize" button.
- User reviews can be made public and will display in a tab next to your comments. Go to Settings > Advanced and "Enable Public Reviews." Then, add a DOM selector for your comments div.

= 1.3.22 =
* FIX: Fix an issue where video data for cards was missing contentUrl

= 1.3.20 =
* ENHANCEMENT: Add JSON-LD schema toggle to How-To cards
* ENHANCEMENT: Add contentUrl property to video schema
* FIX: Zero cook and prep times should no longer give Google Search Console errors

= 1.3.19 =
* ENHANCEMENT: Add stepped instructions to JSON-LD
* FIX: Link Parsing in Ingredients
* FIX: Some creations weren't mapping to canonical posts
* FIX: Restore Ads on Print pages

= 1.3.18 =
* FIX: Fix missing thumbnails for list items in admin UI
* FIX: Prevent conflicts with other plugins using common function names

= 1.3.17 =
* FIX: Fix activation error with certain versions of MySQL
* FIX: Fix issue where pre-0.3 recipes could not be cloned

= 1.3.16 =
* ENHANCEMENT: Cards no longer can be cloned when using modal editor
* ENHANCEMENT: Add new hook to print card output
* FIX: Fixes occasional databases errors when saving cards
* FIX: Only external list cards open in a new window

= 1.3.15 =
* FIX: Fixes issue with list URLs

= 1.3.14 =
* ENHANCEMENT: Setting added to adjust H1s in cards to H2s
* ENHANCEMENT: JSON-LD schema now only displays on canonical post
* FIX: Prevents nutrition and products from incorrectly being linked to lists
* FIX: Pinterest buttons in lists respect "off" setting
* FIX: Prevents Social Warfare from affecting related product images
* FIX: Prevents Chicory from appearing on How-To cards
* FIX: Fixes issue where nofollow attribute wasn't always saving on supplies
* FIX: Lists now output proper URL for all internal items
* FIX: JSON-LD validation test button works again
* FIX: Better data management of associated posts

= 1.3.13 =
* FIX: Fixes issue where previously created instructions may not properly display within the editor

= 1.3.12 =
* FIX: Better conversion of shortcodes into Gutenberg
* FIX: Pinterest button no longer attached to top of list when rendering after another card
* FIX: Fixes issue where a MySQL error appeared on some server environments
* FIX: Prevent Chrome autocomplete when adding cuisine or category to card
* FIX: More reliable WYSIWYG component

= 1.3.11 =
* FIX: Aggressive Buttons setting now applies to Lists
* FIX: Prevents a PHP error when a card is added after a List
* FIX: Fixes issue where time UI wasn't visible

= 1.3.10 =
* FIX: Prevent List descriptions from being tiny
* FIX: Amazon images will display in dropdown
* FIX: Prevent misordered ingredients from detailed editor
* FIX: Prevent multiple List JSON-LDs from outputting
* FIX: Prevent a bug where typing in time inputs will insert "minutes" sporadically
* FIX: Improve performance of image rendering in instructions preview
* FIX: Buttons in lists will sync with theme
* FIX: Add missing "Cost" field to front-end How-To renders

= 1.3.9 =
* ENHANCEMENT: Create List items manually
* ENHANCEMENT: Improved Error Messages for user timeouts
* ENHANCEMENT: Make Notices for API Registration dismissible
* FIX: Output alt text in images
* FIX: Prevent activations for incompatible PHP and WP
* FIX: Conflict with Jetpack YouTube embeds
* FIX: User validation in secondary UIs
* FIX: TinyMCE state reset
* FIX: Multipage Print Margins
* FIX: Print Image sizes
* FIX: Display of No Follow state for Lists
* FIX: Photo Credit layout styles
* FIX: Moving between internal and external links
* FIX: Remove image if Pinterest is turned off

= 1.3.8 =
* FIX: Prevents duplicate images within Lists
* FIX: Duplicate List item prevention
* FIX: Properly saves List thumbnail images

= 1.3.7 =
* FIX: Fix bug in List Drag and Drop functionality
* FIX: Improve relationship mapping in Clone tool
* FIX: Check for pre v1.7.7 of Mediavine Control Panel

= 1.3.6 =
* FEATURE: Improves UX and speed of List search
* FEATURE: Add a setting to disable JSON-LD output for individual posts
* FEATURE: Add `mv_create_card_before_render` and `mv_create_card_after_render` hooks
* FEATURE: Adds support for Amazon links as List items
* FIX: Prevents output of JSON-LD markup in RSS feeds
* FIX: Removes duplicate ad hints when rendering a List after a recipe card in a single post
* FIX: Fixes error in List render
* FIX: Prevents display of special characters as HTML entities in List search
* ENHANCEMENT: Protect client-side resources from caching plugins
* ENHANCEMENT: Refactor client-side JavaScript to optimize page load

= 1.3.3 =
* ENHANCEMENT: Adds ability to no-follow external List items
* ENHANCEMENT: Optimize the ad hint used for Mediavine publishers
* ENHANCEMENT: Adds a setting to override the author for all cards with default Copyright Attribution
* FIX: Prevents Social Warfare and Pinterest browser extension from targeting List images for which we already include a Pinterest button
* FIX: Prevents issue where List items would sometimes display in incorrect order
* FIX: Fix an issue where adding previously-added products without thumbnails would result in the thumbnail not being re-scraped
* FIX: Fixes issue where including Recipe and List in the same post would sometimes result in duplicate descriptions
* FIX: Fixes an issue where Cards used as List items would link to incorrect page
* FIX: Center ads used in Lists
* FIX: Prevents an issue where backspacing immediately after clicking a card would create an error when re-inserting the card
* FIX: Prevents issues where editor would sometimes load with empty content
* FIX: Improves size of images used by Grid layouts
* FIX: Prevents an error when global affiliate notice has not been set
* CHANGE: Changes the "Save" notice on the Settings page to be more visible
* CHANGE: List JSON-LD will only display in the canonical post for that link

= 1.3.1 =
* FIX: Change ad target for Mediavine publishers
* FIX: Fix missing Pinterest buttons
* FIX: CSS improvements for circle List layouts
* FIX: Grid layouts will display ads for Mediavine publishers in a separate row
* FIX: Regenerate images for List items if they don't exist
* CHANGE: Change "Duplicate" button to "Clone" button

= 1.3.0 =
**New Content Type: Lists!**
* The new "List" content type allows you to create curated link roundups of your other Create Cards, other posts on your site, or external URLs
* Lists support four beautiful layouts:
  * Hero – includes a large, Pinterest-friendly image
  * Grid – displays in a two-across grid
  * Numbered – includes a large number, great for "X Best _______" lists
  * Circles – displays images in a circle, looks great with the Classy Circle card theme!
* Links to Create cards can reference data from that card, for instance, cook time for a List of quick meals, calories for a List of diet-friendly recipes, or difficulty for a List of around-the-home projects
* Lists correspond to the Google's "Carousel" structured data type: https://developers.google.com/search/docs/guides/mark-up-listings
* All Lists include built-in content hints for Mediavine ads, including a setting to control frequency

Features & Enhancements
* Creating content on the run? The Create dashboard will look better on your phone or tablet
* Want to use one card as a base to make another? Cards now include a "Duplicate" button to save you from tedious copying and pasting
* Using a shortcode-friendly page builder instead of TinyMCE or Gutenberg? Cards now include shortcode snippet for you to copy and paste
* Never going to make a recipe or a how-to and overwhelmed by choice? We've added a setting to limit the types of content to choose from
* Support for dashboard internationalization
* Navigating to another page of cards will scroll you to the top of the new page
* Fixes an issue where the "Select Existing" UI in Gutenberg would display the wrong content type when multiple types of cards are added to a single post

Changes
* Cards without an author will use the default copyright attribution setting as the author
* Printed cards will include a URL back to the original post
* Icons in the Gutenberg block selector are now under their own heading and have a new and lovely splash of teal

= 1.3.2 =
* FIX: Restored card editor to last published data.

= 1.2.8 =
* FIX: Fix issue with scrolling breaking upon modal close
* FIX: Fix issues with editing images in posts

= 1.2.7 =
* FIX: Fix issue with taxonomy dropdowns sometimes not updating on click
* FIX: Fix issue where scheduled posts wouldn't create card associations necessary for canonical posts or review syncing

= 1.2.6 =
* ENHANCEMENT: Print button compatibility with security plugins that strip \<form\> tags from post content
* FIX: Prevent pinning of print pages
* FIX: Yield displays on Centered card themes when times have not been provided
* FIX: Fix issue where bulk ingredients would display as blank field during importing

= 1.2.5 =
* FIX: Fixes dropdowns like author and category in Gutenberg
* FIX: Provides a button to register with a different email address
* FIX: Prevents a nutrition notice from displaying when it shouldn't
* FIX: Fixes a bug in Mediavine Control Panel preventing videos from being deleted from posts

= 1.2.4 =
* Adds an upgrade notice for upcoming changes in the 1.3.0 release
* FIX: Fixes error on single Product pages
* FIX: Correctly disables card hero images from being targeted by Pinterest browser extension
* FIX: Fixes issue that was causing infinite loops with themes or plugins using the 'save_post' hook
* FIX: Provides backwards compatibility for custom card templates that used 'disable_nutrition' and 'disable_reviews' settings

= 1.2.3 =
* FIX: Add support for block tags
* FIX: Duplicate post association issues

= 1.2.2 =
* ENHANCEMENT: Improve UX around calculate button
* ENHANCEMENT: Add global nutrition disclaimer setting
* FIX: Fix issue with PHP 5.4 conflict
* COSMETIC: Better UI render on low-DPR screens

= 1.2.1 =
* FIX: Fix local storage conflict with nutrition calculation auth

= 1.2.0 =
* FEATURE: Free automatic nutrition calculation with simple plugin registration
* FEATURE: Option to have traditional nutrition label display
* FEATURE: Preview Google Rich Snippet with one click
* FEATURE: Full Gutenberg support
* FEATURE: Disable thumbnails in print cards
* FEATURE: List view of Create Cards
* FEATURE: Classic Editor button to access Create Card editor without scrolling

= 1.1.12 =
* FIX: Fix a bug with Pinterest not picking up Pinterest image

= 1.1.11 =
* FIX: Fix a bug with adding recommended products

= 1.1.0 =
* FIX: Provide ability to translate plural time units (e.g. "minutes")
* FIX: Fix issues with recommended product search
* FIX: Fix front-end JavaScript errors in IE11
* FIX: Fix "Add New" URL in sites running in subdirectories
* FIX: Print card style will always be default style

= 1.1.9 =
* FIX: Highest resolution image check only pulls from available sizes
* FIX: ShortPixel will no longer re-optimize images after card publish

= 1.1.8 =
* FEATURE: Track new ratings from Comment Rating Field pro
* FIX: Prevent TinyMCE application from mounting on the wrong editor

= 1.1.7 =
* FIX: Prevent app crash when adding multiple cards to a Gutenberg post
* FIX: Prevent error when filtering JSON-LD by unique image
* FIX: Prevent warning when rendering cards with no thumbnail images

= 1.1.6 =
* FIX: Adhere to recommendations for JSON-LD image sizes

= 1.1.5 =
* ENHANCEMENT: More reliable JSON-LD object for Google
* FIX: Remove unnecessary Autoptimize clear on activate and deactivate
* FIX: More reliable category and cuisine term names in JSON-LD
* FIX: Fixes issue where MCP videos would use mv_create shortcode
* FIX: Featured image displays properly in Gutenberg

= 1.1.4 =
* FIX: Make Pinterest description available to browser extension
* FIX: Fix display of thumbnail editor
* FIX: Improve rendered card styles for small phones
* FIX: Better display of images in card instructions
* FIX: Fix issue with print view on some servers
* FIX: Prevent Autoptimize from aggregating script localizations
* FIX: Prevent mv_create post types from creating redirects

= 1.1.3 =
* FIX: Improve responsive image size for recommended products
* FIX: Allow for default localization of time labels
* FIX: Improve Gutenberg integration

= 1.1.2 =
* ENHANCEMENT: Add .pot with plugin so users can generate translations (note: at the moment, translations will only appear on the front-end of the site. Back-end support is coming in a future release!)
* FIX: Prevent re-saving posts extraneously, fixing issues with <script> tags being stripped and pingbacks being triggered
* FIX: Resolve issue where deleting content from Instructions or Notes fields would leave remaining content
* FIX: Prevent admin CSS and JS from being cached
* COSMETIC: Various improvements for admin CSS and copy

= 1.1.1 =
* FEATURE: Remove tooltip from Instructions WYSIWYG
* FEATURE: Adding async to front-end javascript tag
* FEATURE: Track active filters when page is refreshed
* FIX: Eliminate Duplicate DB Call
* FIX: Prevent error with undefined properties field
* COSMETIC: Adding namespaces to admin CSS
* COSMETIC: Increase base font size to 16px on rendered cards

= 1.1.0 =
* FEATURE: Add support for registering custom fields to cards
* FEATURE: Add support for videos from YouTube
* FEATURE: Add button to settings to clear Create data from browser cache
* FEATURE: Add support for adding custom CSS classes on a per-card basis
* FEATURE: Add support for custom affiliate link notices, globally and on a per-card basis
* FIX: Correctly output JSON-LD schema for How-To content
* FIX: Fix conflict with The SEO Framework when adding a new card to a post with an assigned category
* FIX: Limit size of data stored in browser cache
* FIX: Prevent issue where card preview in WYSIWYG sometimes render as broken if certain tags were stripped
* FIX: Big hero theme respects "disable ratings" setting
* FIX: Improves query time when searching site for content within cards
* COSMETIC: Change instances of "Skin" to "Card Style"
* COSMETIC: `.mv-create-skin-{CARD-STYLE}` is now being replaced with `.mv-create-card-style-{CARD-STYLE}`

= 1.0.1 =
* FEATURE: Allow \<strong\>, \<em\>, and \<a\> tags in description field
* FEATURE: Add setting to disable product link scraping
* FEATURE: Automatically display an affiliate link notice on the front end for recommend products
* FIX: Prevent issue where cached recipes wouldn't show recent changes
* FIX: Remove unused sw.js file on the front-end of cards
* FIX: Fix strange cursor behavior when adding line breaks to instructions and notes fields
* FIX: Prevent crashes in IE11

= 1.0.0 =
* Initial release

== Upgrade Notice ==

= 1.9.11 =
* This update provides bug fixes to the plugin.

= 1.9.10 =
* This update brings back review editing.

= 1.9.9 =
* This update patches a security vulnerability.

= 1.9.8 =
* This update patches a security vulnerability.

= 1.9.7 =
* This update provides bug fixes to the plugin.

= 1.9.6 =
* This update patches a CRITICAL security vulnerability.

= 1.9.5 =
* This update patches a security vulnerability.

= 1.9.4 =
* This update fixes a compatibility issue with PHP 8.

= 1.9.3 =
* This update fixes an issue with Google Chrome 105+ and Create's WYSIWYG editors.

= 1.6.7 =
* This update provides bug fixes to the plugin.

= 1.6.6 =
* This update provides bug fixes to the plugin.

= 1.6.5 =
* This update provides bug fixes to the plugin.

= 1.6.4 =
* This update provides bug fixes to the plugin.

= 1.6.3 =
* This update provides bug fixes to the plugin.

= 1.6.2 =
* This update provides bug fixes to the plugin.

= 1.6.1 =
* This update provides bug fixes to the plugin.

= 1.6.0 =
* This update adds the social footer feature.

= 1.5.10 =
* This update provides bug fixes to the plugin.

= 1.5.9 =
* This update provides bug fixes to the plugin.

= 1.5.8 =
* This update provides bug fixes to the plugin.

= 1.5.7 =
* This update provides bug fixes to the plugin.

= 1.5.6 =
* This update provides bug fixes to the plugin.

= 1.5.5 =
* This update provides bug fixes to the plugin.

= 1.5.4 =
* This update provides bug fixes to the plugin.

= 1.5.3 =
* This update provides bug fixes to the plugin.

= 1.5.2 =
* This update provides bug fixes to the plugin.

= 1.5.1 =
* This update provides bug fixes to the plugin.

= 1.5.0 =
* This update adds the jump to card feature.

= 1.4.19 =
* This update provides bug fixes to the plugin.

= 1.4.18 =
* This update provides bug fixes to the plugin. Please refresh your site's page cache after updating

= 1.4.17 =
* This update provides bug fixes to the plugin

= 1.4.16 =
* This update provides bug fixes to the plugin

= 1.4.15 =
* This update provides bug fixes to the plugin

= 1.4.14 =
* This update provides bug fixes to the plugin

= 1.4.11 =
* This update provides bug fixes to the plugin

= 1.4.10 =
* This update provides bug fixes to the plugin

= 1.4.9 =
* This update provides bug fixes to the plugin

= 1.4.8 =
* This update provides bug fixes to the plugin

= 1.4.7 =
* This update provides bug fixes to the plugin

= 1.4.6 =
* This update provides bug fixes to the plugin

= 1.4.5 =
* Adds new admin UI, public reviews, and several other features. WordPress 5.0 or greater is required.

= 1.3.22 =
* This update provides bug fixes to the plugin

= 1.3.16 =
* This update provides bug fixes to the plugin

= 1.3.15 =
* This update provides bug fixes to the plugin

= 1.3.14 =
* This update provides bug fixes to the plugin

= 1.3.13 =
* This update provides bug fixes to the plugin

= 1.3.12 =
* This update provides bug fixes to the plugin

= 1.3.11 =
* This update provides bug fixes to the plugin

= 1.3.10 =
* This update provides bug fixes to the plugin

= 1.3.9 =
* This update provides bug fixes to the plugin

= 1.3.8 =
* This update provides bug fixes to the plugin

= 1.3.7 =
* This update provides bug fixes to the plugin

= 1.3.6 =
* This update provides bug fixes to the plugin

= 1.3.3 =
* This update provides bug fixes to the plugin

= 1.3.1 =
* This update provides bug fixes to the plugin

= 1.3.0 =
* Adds "Lists" content type and several other features

= 1.2.8 =
* This update provides bug fixes to the plugin

= 1.2.7 =
* This update provides bug fixes to the plugin

= 1.2.6 =
* This update provides bug fixes to the plugin

= 1.2.5 =
* This update provides bug fixes to the plugin

= 1.2.4 =
* This update provides bug fixes to the plugin

= 1.2.3 =
* This update provides bug fixes to the plugin

= 1.2.2 =
* This update provides bug fixes to the plugin

= 1.2.1 =
* This update provides bug fixes to the plugin

= 1.2.0 =
* Free nutrition calculation and full Gutenberg support

= 1.1.12 =
* This update provides bug fixes to the plugin

= 1.1.11 =
* This update fixes a bug with adding new Recommended Products

= 1.1.10 =
* This update provides bug fixes to the plugin

= 1.1.9 =
* This update provides bug fixes to the plugin

= 1.1.8 =
* This update provides bug fixes to the plugin

= 1.1.7 =
* This update provides bug fixes to the plugin

= 1.1.6 =
* This update fixes an issue with the image sizes included in JSON-LD markup

= 1.1.5 =
* This update provides bug fixes to the plugin

= 1.1.4 =
* This update provides bug fixes to the plugins

= 1.1.3 =
* This update provides bug fixes to the plugin

= 1.1.2 =
* This update provides bug fixes to the plugin

= 1.1.1 =
* This update provides bug fixes to the plugin

= 1.1.0 =
* This update adds custom field and YouTube support and JSON-LD for How-To content

= 1.0.1 =
* This update fixes some initial bugs with the plugin
