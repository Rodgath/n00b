# n00b
Simple WordPress starter theme.

```
themes/your-theme-name/   # → Root of your Sage based theme
├── assets/               # → Theme PHP
│   ├── css/         # → Blade implementation, asset manifest
│   │   ├── bootstrap.min.css   # → Settings for compiled assets
│   │   ├── custom-sample.css   # → Settings for compiled assets
│   │   └── style.css       # → Theme stylesheets
│   ├── fonts/         # → Theme customizer setup
│   ├── images/         # → Theme customizer setup
│   └── js/         # → Blade implementation, asset manifest
│       ├── bootstrap.demo.js   # → Settings for compiled assets
│       ├── bootstrap.min.js   # → Settings for compiled assets
│       └── script.js       # → Theme stylesheets
├── includes/               # → Theme PHP
│   ├── functions/         # → Blade implementation, asset manifest
│   │   ├── cleanup.php   # → Settings for compiled assets
│   │   ├── customizer.php   # → Settings for compiled assets
│   │   └── custom-functions-sample.php       # → Theme stylesheets
│   ├── post-types/         # → Theme customizer setup
│   ├── shortcodes/         # → Theme customizer setup
│   └── widgets/       # → Theme stylesheets
├── languages/         # → Autoloading for `app/` files
├── template-parts/            # → Theme assets and templates
│   ├── page/           # → Front-end assets 
│   │   └── content-page.php      # → Theme stylesheets
│   ├── post/       # → Theme images
│   │   ├── content.php     # → Theme JS
│   │   └── content-single.php      # → Theme stylesheets
│   ├── content.php      # → Controller files
│   ├── content-archive.php     # → Composer autoloader, theme includes
│   ├── content-author.php         # → Never manually edit
│   ├── content-category.php    # → Theme screenshot for WP admin
│   ├── content-none.php    # → Theme screenshot for WP admin
│   ├── content-pagenav.php    # → Theme screenshot for WP admin
│   ├── content-search.php    # → Theme screenshot for WP admin
│   ├── content-standard.php    # → Theme screenshot for WP admin
│   └── content-tag.php    # → Theme screenshot for WP admin
├── 404.php               # → Composer packages (never edit)
├── archive.php               # → Composer packages (never edit)
├── archive-{post_type}.php               # → Composer packages (never edit)
├── author.php               # → Composer packages (never edit)
├── author-{ID}.php               # → Composer packages (never edit)
├── author-{user_nicename}.php               # → Composer packages (never edit)
├── category.php               # → Composer packages (never edit)
├── category-{id}.php               # → Composer packages (never edit)
├── category-{slug}.php               # → Composer packages (never edit)
├── comments.php               # → Composer packages (never edit)
├── footer.php               # → Composer packages (never edit)
├── functions.php               # → Composer packages (never edit)
├── header.php               # → Composer packages (never edit)
├── index.php               # → Composer packages (never edit)
├── page.php               # → Composer packages (never edit)
├── page-{page_name}.php               # → Composer packages (never edit)
├── page-custom.php               # → Composer packages (never edit)
├── screenshot.jpg               # → Composer packages (never edit)
├── search.php               # → Composer packages (never edit)
├── searchform.php               # → Composer packages (never edit)
├── sidebar.php               # → Composer packages (never edit)
├── sidebar-left.php               # → Composer packages (never edit)
├── sidebar-right.php               # → Composer packages (never edit)
├── single.php               # → Composer packages (never edit)
├── single-{post_type}.php               # → Composer packages (never edit)
├── style.css              # → Composer packages (never edit)
├── tag.php               # → Composer packages (never edit)
├── tag-{slug}.php               # → Composer packages (never edit)
├── taxonomy.php               # → Composer packages (never edit)
└── taxonomy-{taxonomy_slug}.php               # → Composer packages (never edit)


```
