# Auto Car Finder – demo site for ACF and WordPress

This codebase was part of the WP Engine DevRel workshop: Getting Started with [Advanced Custom Fields (ACF)](https://advancedcustomfields.com) to demonstrate the intricacies of data modeling in WordPress, and the flexibility of ACF to generate and create relationships.

📹 Check out the playback recording from this workshop (**coming soon**) 📹

Final demo site [AutoCarFinder.wpenginepowered.com](https://autocarfinder.wpenginepowered.com)

## Installation & Setup

### Requirements

A WordPress site with:

- [ACF](https://wp.org/plugins/advanced-custom-fields/) or [ACF PRO](https://www.advancedcustomfields.com/pro/) plugin installed and activated. (90% of functionality will work with just ACF, but consider using ACF PRO for full replication of ACF Blocks and Gallery field usage).
- [Icon Block](https://wordpress.org/plugins/icon-block/) plugin (*optional*) - some icons are used in the display templates in the block theme, but they should fail gracefully if you choose not to install this plugin.
- [Gutenberg](https://wordpress.org/plugins/gutenberg/) plugin (*optional*) [v17.8.0] - the experimental Form block is utilized in a few templates in the theme. Again, everything should operate fine without this plugin installed. You just won't see the forms where they should exist.
- Current repo's [Demo ACF Plugin](https://github.com/colorful-tones/Auto-Car-Finder/tree/main/plugins/demo-acf-plugin), which relies on ACF or ACF PRO plugin being active.
- Current repo's [AutoCarFinder WordPress theme](https://github.com/colorful-tones/Auto-Car-Finder/tree/main/themes/autocarfinder) installed and activated.

### Setup

The root of this repository represents the `wp-content/` directory of your WordPress install.

> [!TIP]
> Consider spinning up a sandbox site with [Local](https://localwp.com/), [download a `.zip`](https://github.com/colorful-tones/Auto-Car-Finder/archive/refs/heads/main.zip) of the repo's plugin and theme, unzip them, and drop them in your `[your-local-site]/app/public/wp-content/` directory.

Make sure you have either [ACF](https://wp.org/plugins/advanced-custom-fields/) or [ACF PRO](https://www.advancedcustomfields.com/pro/) installed and activated first (see [Requirements](#requirements) above). A majority of the functionality will work with the ACF (free from WordPress.org) plugin, and any ACF PRO features will fail gracefully if you do not have it installed.

A demonstration of using [Advanced Custom Fields (ACF)](https://www.advancedcustomfields.com/) to:

1. Create a custom post type: `Car`
2. Create several custom taxonomies for the `Car` post type:
    - `Auto Manufacturers` (e.g. Acura, Chevrolet, Honda)
    - `Models` (e.g. CR-V, Kona, Prius)
    - `Conditions` (e.g. User Car, New Car)
3. Create an ACF field group: Vehicle Details
4. Create several custom [ACF Blocks](https://www.advancedcustomfields.com/resources/blocks/) (requires **ACF PRO**):
    - `Car Details` to display a majority of the Vehicle Details field group, and
    - `Car Price` to display the Price field, which is one field in the Vehicle Details field.
    - You can still use templates and `get_field()` or `the_field()` to output the data, and we're chose to go with utilizing the Site Editor and a block theme approach, which utilized ACF Blocks.

| Staging Production |-|
|----------|-|
| Staging | Production |
|---------|------------|
| asdf | asdf |
| fffff | dddd |
| ttttttt | bbbbbbbbbb |

## Resources

[ACF Documentation](https://www.advancedcustomfields.com/resources/)

## Changelog

### 2024-02-28

Post-presentation push of final, original codebase, which includes the AutoCarFinder WordPress block theme, and a copy of the [Demo ACF Plugin](https://github.com/colorful-tones/Demo-ACF-Plugin) to organize our ACF customizations (mostly for [ACF local JSON syncing](https://www.advancedcustomfields.com/resources/local-json/)).
