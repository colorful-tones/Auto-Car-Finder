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

I'm including some screenshots of the ACF admin setup for each of the data types in hopes that it might help you recreate anything. Please see `/screenshots/`

With ACF or ACF PRO activated - activate this repo's Demo ACF Plugin, which contains ACF JSON local sync files for the following data types. ([Learn to sync ACF JSON changes](https://www.advancedcustomfields.com/resources/local-json/#syncing-changes))

Data Type | Description | ACF (free) or ACF PRO |
|---------|---------|------------|
| Custom **Post Type**: `Car` | A unique post type for our cars, which we can assign custom (post meta) fields and custom taxonomies. <br><br> See: [`plugins/demo-acf-plugin/acf-json/post-types/cars.json`](https://github.com/colorful-tones/Auto-Car-Finder/blob/main/plugins/demo-acf-plugin/acf-json/post-types/cars.json) | ACF (free) |
| Custom **Taxonomy**: `Auto Manufacturers` | This custom taxonomy is assigned to the `Car` post type to allow authors to assign a manufacturer to each car. Examples: Acura, Chevrolet, Honda. <br><br> See: [`plugins/demo-acf-plugin/acf-json/taxonomies/auto-manufacturers.json`](https://github.com/colorful-tones/Auto-Car-Finder/blob/main/plugins/demo-acf-plugin/acf-json/taxonomies/auto-manufacturers.json) | ACF (free) |
| Custom **Taxonomy**: `Models` | This custom taxonomy is assigned to the `Car` post type to allow authors to assign a model to each car. Examples: CR-V, Kona, Prius, Wrangler. <br><br> See: [`plugins/demo-acf-plugin/acf-json/taxonomies/models.json`](https://github.com/colorful-tones/Auto-Car-Finder/blob/main/plugins/demo-acf-plugin/acf-json/taxonomies/models.json) | ACF (free) |
| Custom **Taxonomy**: `Conditions` | This custom taxonomy is assigned to the `Car` post type to allow authors to assign a condition to each car. Examples: Used Car, New Car. <br><br> See: [`plugins/demo-acf-plugin/acf-json/taxonomies/conditions.json`](https://github.com/colorful-tones/Auto-Car-Finder/blob/main/plugins/demo-acf-plugin/acf-json/taxonomies/conditions.json) | ACF (free) |
| Custom **(post meta) field group**: `Vehicle Details` | These are the additional details that we want to add to each car post type. We're utilizing a variety of ACF's field types to organize and tailor the editorial experience for our authors when they create a new car. <br><br>Some example fields include: <br><br>- Listing Start Date, Listing End Date ([Date Picker](https://www.advancedcustomfields.com/resources/date-picker/) field type) <br>- Price ([Text](https://www.advancedcustomfields.com/resources/text/) field type) <br>- Mileage ([Number](https://www.advancedcustomfields.com/resources/number/) field type) <br>- Drive Type ([Select](https://www.advancedcustomfields.com/resources/select/) field type) <br>- Interior & Exterior Colors ([Color Picker](https://www.advancedcustomfields.com/resources/color-picker/) field type) <br>- Vehicle Photos ([Gallery](https://www.advancedcustomfields.com/resources/gallery/) field type **ACF PRO** *only*) <br>- a few more fields (too long to list)<br><br> See: [`plugins/demo-acf-plugin/acf-json/field-groups/vehicle-details.json`](https://github.com/colorful-tones/Auto-Car-Finder/blob/main/plugins/demo-acf-plugin/acf-json/field-groups/vehicle-details.json) | ACF (free) |

> [!NOTE]  
> Once all the JSON syncing is complete and the custom post type, taxonomies and field groups are registered then you will still have to populate your site with unique new car data.

In the original demo site and workshop we're utilizing the latest WordPress full site editing capabilities in our AutoCarFinder block theme, which includes some custom ACF Blocks.
Again, ACF Blocks are an ACF PRO only feature, but the site and theme will still work (mostly), and certainly areas that rely on the blocks will just not display. You could consider converting the blocks to a classic theme architecture and utilize ACF's [`get_field()`](https://www.advancedcustomfields.com/resources/get_field/), [`get_fields()`](https://www.advancedcustomfields.com/resources/get_fields/) or [`the_field()`](https://www.advancedcustomfields.com/resources/the_field/) to output them in `single-car.php` or `archive-car.php` for example.

All of the ACF blocks are located in `plugins/demo-acf-plugin/blocks/` directory, including:

| ACF Block (PRO only) | Description |
|---------|------------|
| Car Details | This block is used to display most of the *Vehicle Details* (field group) in the theme's: <br>- `autocarfinder/templates/archive-car.html`<br>- `autocarfinder/templates/front-page.html`<br>- `autocarfinder/templates/index.html`<br>- `autocarfinder/templates/single-car.html`<br>- `autocarfinder/templates/taxonomy-condition.html` |
| Car Price | This block is used to just display the *Price* (field) in the theme's: <br>- `autocarfinder/templates/archive-car.html`<br>- `autocarfinder/templates/front-page.html`<br>- `autocarfinder/templates/index.html`<br>- `autocarfinder/templates/single-car.html`<br>- `autocarfinder/templates/taxonomy-condition.html` |

## Need Help?

Please open [a new Issue](https://github.com/colorful-tones/Auto-Car-Finder/issues/new/choose) and jot down any challenges you're encountering. Please provide as much detail as possible, including: WordPress version, all active plugins (especially if they're not listed here), and even browser version. Thanks!

## Resources

[ACF Documentation](https://www.advancedcustomfields.com/resources/)

## Changelog

### 2024-02-28

Post-presentation push of final, original codebase, which includes the AutoCarFinder WordPress block theme, and a copy of the [Demo ACF Plugin](https://github.com/colorful-tones/Demo-ACF-Plugin) to organize our ACF customizations (mostly for [ACF local JSON syncing](https://www.advancedcustomfields.com/resources/local-json/)).
