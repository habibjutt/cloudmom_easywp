# WooCommerce Shop Page with Category Tree Sidebar

## Implementation Summary

This implementation adds a WooCommerce shop page with a hierarchical category tree sidebar that displays product categories and filters products by selected categories.

## Files Created/Modified

### New Files Created:

1. **woocommerce/archive-product.php**
   - Main shop page template
   - Includes category tree sidebar
   - Shows products in a grid layout

2. **woocommerce/taxonomy-product_cat.php**
   - Product category archive template
   - Maintains same layout as shop page
   - Shows filtered products by category

3. **parts/sidebar-shop.php**
   - Hierarchical category tree sidebar
   - Displays product categories with counts
   - Auto-expands current category and ancestors
   - Shows "View All Products" link on category pages

4. **assets/css/source/layout/_shop.scss**
   - Responsive shop page styling
   - Category tree sidebar styles
   - Product grid layout
   - Hover effects and transitions

5. **assets/js/source/03-shop.js**
   - Category tree toggle functionality
   - Auto-expand current category and ancestors
   - Mobile-friendly interactions

### Modified Files:

1. **functions.php**
   - Added WooCommerce theme support
   - Added product gallery features (zoom, lightbox, slider)
   - Removed default WooCommerce wrappers
   - Disabled WooCommerce default sidebar
   - Set products per page to 12
   - Added pre_get_posts hook for filtering

2. **assets/css/source/global.scss**
   - Imported shop.scss stylesheet

3. **assets/Gruntfile.js**
   - Updated to use dart-sass instead of deprecated Ruby Sass

## Features

### Category Tree Sidebar:
- Hierarchical display of product categories
- Product count per category
- Toggle to expand/collapse child categories
- Auto-expands current category and all ancestors
- Responsive design (collapses on mobile)
- "View All Products" link on category pages

### Shop Page:
- Responsive product grid (3 columns on desktop, 2 on tablet, 1 on mobile)
- Product hover effects
- Clean, modern design
- Breadcrumbs integration
- Full WooCommerce hooks integration

### Product Display:
- Product images
- Product titles
- Pricing (including sale prices)
- Add to cart buttons
- Hover effects for better UX

## How It Works

1. **Shop Page**: When users visit the shop page, they see all products with the category tree sidebar on the left.

2. **Category Selection**: Clicking a category in the sidebar navigates to that category page, showing only products in that category.

3. **Category Tree**: The sidebar shows a hierarchical tree of categories:
   - Parent categories can be expanded/collapsed
   - Current category is highlighted and expanded
   - All ancestor categories are auto-expanded

4. **Responsive**: On mobile devices, the sidebar moves above the products for better mobile UX.

## Customization

### Adjust Products Per Page:
Edit the filter in `functions.php`:
```php
add_filter( 'loop_shop_per_page', function( $cols ) {
    return 12; // Change this number
}, 20 );
```

### Adjust Grid Columns:
Edit `_shop.scss`:
```scss
.products {
    grid-template-columns: repeat(3, 1fr); // Change column count
}
```

### Styling:
All styling is in `assets/css/source/layout/_shop.scss`. Customize colors, spacing, fonts, etc.

## Browser Compatibility

- Modern browsers (Chrome, Firefox, Safari, Edge)
- Internet Explorer 11+ (with some graceful degradation)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Dependencies

- WordPress 5.0+
- WooCommerce 3.0+
- Modern browser with JavaScript enabled

## Maintenance

After making changes to SCSS or JS files:

```bash
cd wp-content/themes/cloudmom/assets
npm install
npx grunt sass postcss  # For CSS
npx grunt concat uglify # For JS
```

Or run both:
```bash
npx grunt
```
