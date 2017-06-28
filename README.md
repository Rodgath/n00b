# n00b
VERY SIMPLE WordPress starter theme for newbies and noobs.

## Features
* Easy to use
* Short learning curve
* Dilaz-Panel compatible
* Dilaz-Metaboxes compatible


## Theme Structure
```
themes/your-theme-name/                      # → Root of your n00b based theme
├── assets/                                  # → Theme assets
│   ├── css/                                 # → Theme stylesheets
│   ├── fonts/                               # → Fonts
│   ├── images/                              # → Images
│   └── js/                                  # → JavaScripts
├── includes/                                # → Theme includes
│   ├── functions/                           # → Theme funstions
│   ├── post-types/                          # → Theme custom post types
│   ├── shortcodes/                          # → Theme shortcodes
│   └── widgets/                             # → Theme widgets
├── languages/                               # → Translation and Internationalization
├── page-templates/                          # → WP 4.7+ page templates
│   └── {Page Template}.php                  # → Page template name e.g. full-width.php
├── post-type-templates/                     # → WP 4.7+ post type templates
│   └── {Post Type Template}.php             # → Post type template name e.g. full-width.php
├── template-parts/                          # → Template parts 
│   ├── page/                                # → Page template parts
│   ├── post/                                # → Post template parts
│   ├── content.php                          # → General content
│   ├── content-archive.php                  # → Archive content
│   ├── content-author.php                   # → Author content
│   ├── content-category.php                 # → Category archive content
│   ├── content-none.php                     # → Emty content
│   ├── content-pagenav.php                  # → Page navigation content
│   ├── content-search.php                   # → Search content
│   ├── content-standard.php                 # → Standard post content
│   └── content-tag.php                      # → Tag archive content
├── 404.php                                  # → Error 404 (Not Found) template
├── archive.php                              # → Archive template
├── archive-{post_type}.php                  # → Post type acive template e.g. archive-post.php
├── attachment.php                           # → Attachment template
├── author.php                               # → General author template
├── author-{ID}.php                          # → Single author template e.g. author-1.php
├── author-{user_nicename}.php               # → Single author template e.g. author-john.php
├── category.php                             # → General category template
├── category-{id}.php                        # → Single category template e.g. category-5.php
├── category-{slug}.php                      # → Single category template e.g. category-news.php
├── comments.php                             # → Comments template
├── embed.php                                # → General embed template
├── embed-{post_type}.php                    # → Single embed template e.g. embed-post.php
├── embed-{post_type}-{post_format}.php      # → Single embed template e.g. embed-post-audio.php
├── footer.php                               # → Footer template
├── footer-{name}.php                        # → Custom footer template e.g. footer-new.php
├── functions.php                            # → Functions (never edit - instead use includes/function/funstions-custom.php)
├── header.php                               # → Header template file
├── header-{name}.php                        # → Custom header template e.g. header-new.php
├── index.php                                # → Home template if home.php dows not exist
├── page.php                                 # → General page template
├── page-{id}.php                            # → Single page template e.g. page-4.php
├── page-{page_name}.php                     # → Single page template e.g. page-about.php
├── screenshot.jpg                           # → Main screenshot file for the theme
├── search.php                               # → General search form template
├── searchform.php                           # → search.php overwrite
├── sidebar.php                              # → Sidebar template
├── sidebar-{name}.php                       # → Custom sidebar template e.g. sidebar-left.php
├── sidebar-left.php                         # → n00b left sidebar
├── sidebar-right.php                        # → n00b right sidebar
├── single.php                               # → General tag template
├── single-{post_type}.php                   # → Single post type template e.g. single-post.php
├── single-{post_type}-{post_name}.php       # → Single post type template e.g. single-post-hello-world.php
├── style.css                                # → heme meta information
├── tag.php                                  # → General tag template
├── tag-{id}.php                             # → Single tag template e.g. tag-3.php
├── tag-{slug}.php                           # → Single tag template e.g. tag-wordpress.php)
├── taxonomy.php                             # → General taxonomy template
├── taxonomy-{taxonomy_slug}.php             # → Single taxonomy template e.g. location.php
└── taxonomy-{taxonomy_slug}-{term_slug}.php # → Single taxonomy template e.g. taxonomy-location-texas.php
```




