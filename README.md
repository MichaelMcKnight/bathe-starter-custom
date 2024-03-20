# [Bathe](https://ixkaito.github.io/bathe/) [![GitHub release](https://img.shields.io/github/v/release/ixkaito/bathe?color=ed64a6)](https://github.com/wp-bathe/bathe/releases) [![license](https://img.shields.io/badge/license-GPL--2.0%2B-orange)](https://github.com/wp-bathe/bathe/blob/master/LICENSE) [![Test](https://github.com/ixkaito/bathe/workflows/Test/badge.svg)](https://github.com/ixkaito/bathe/actions) [![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg)](https://github.com/ixkaito/bathe/pulls)

Bathe is the simplest WordPress starter theme including full setup for Tailwind CSS, Sass, PostCSS, Autoprefixer, Vite, TypeScript, ESLint, Prettier, stylelint, Browsersync, imagemin.

## Documentation

You can find the Bathe documentation [on the website](https://ixkaito.github.io/bathe/).

## Copyright / License

© 2020 the contributors of Bathe under the [GPL version 2.0](https://raw.githubusercontent.com/wp-bathe/bathe/master/LICENSE) or later.

## Additional Features Added to Theme

1. Advanced src/sass folder setup includes various helper and global files.
2. The src/js folder is broken up for organization. Added src/js/ui slide functions.
3. Additional templates folder created for [page templates](https://developer.wordpress.org/themes/template-files-section/page-template-files/)
4. Added theme support for [responsive-embeds](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content), [wp-block-styles](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#default-block-styles), and [align-wide](https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#wide-alignment)
5. [Font Awesome](https://fontawesome.com/) is enqueued in funcitons.php for icons.
6. [Hamburgers](https://www.npmjs.com/package/hamburgers) is enqueued in functions.php for easy hamburger menu animations.
7. [Splide](https://splidejs.com/) is enqueued in functions.php for sliders.
8. [acf-json](https://www.advancedcustomfields.com/resources/local-json/) is added to the theme.
9. Prebuilt mobile menu, modal, and banner.

> [Advanced Custom Fields Pro](https://www.advancedcustomfields.com/pro/) should be installed for best results.

> Tailwind is disabled by default. You can re-enable it by removing the comments in postcss.config.mjs and the enqueue in functions.php

### How to Use

In style.css update the [headers](https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/#example) as needed for your project.

In the package.json file under config->browsersync update the proxy to match your local site url.

Run `npm install` to install the required packages.  
Run `npm run dev` for development.  
Run `npm run build` for deployment.

Cheers, and Godspeed! 🍻
