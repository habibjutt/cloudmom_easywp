# CloudMom Theme - CSS/JS Compilation Instructions

## 📋 Overview

This document provides instructions for compiling SCSS to CSS and JavaScript files for the CloudMom WordPress theme.

## 🔧 Prerequisites

Before compiling, ensure you have:
- **Node.js** installed (v14 or higher recommended)
- **npm** package manager

## 📦 Initial Setup

### 1. Navigate to Assets Directory
```bash
cd wp-content/themes/cloudmom/assets
```

### 2. Install Dependencies
```bash
npm install
```

This will install all required packages including:
- `sass` - Dart Sass compiler
- `grunt` - Task runner (legacy, optional)
- `autoprefixer` - CSS vendor prefixing
- Other build tools

## 🎨 Compiling SCSS to CSS

### Quick Compilation (Recommended)

**Fast compilation with quiet output:**
```bash
npx sass css/source/global.scss css/build/global.css --no-source-map --quiet
```

**With full output (shows deprecation warnings):**
```bash
npx sass css/source/global.scss css/build/global.css --no-source-map
```

### Compile All CSS Files

**Global styles (main stylesheet):**
```bash
npx sass css/source/global.scss css/build/global.css --no-source-map --quiet
```

**Admin styles:**
```bash
npx sass css/source/admin.scss css/build/admin.css --no-source-map --quiet
```

**Block editor styles:**
```bash
npx sass css/source/editor.scss css/build/editor.css --no-source-map --quiet
```

**Compile all at once:**
```bash
npx sass css/source/global.scss css/build/global.css --no-source-map --quiet && npx sass css/source/admin.scss css/build/admin.css --no-source-map --quiet && npx sass css/source/editor.scss css/build/editor.css --no-source-map --quiet
```

### Compilation Options

| Flag | Description |
|------|-------------|
| `--no-source-map` | Excludes source maps (recommended for production) |
| `--quiet` | Suppresses deprecation warnings (faster compilation) |
| `--style=compressed` | Minifies output CSS |
| `--style=expanded` | Human-readable CSS (for debugging) |
| `--watch` | Auto-compile on file changes |

### Watch Mode (Development)

Auto-compile when files change:
```bash
npx sass css/source/global.scss css/build/global.css --no-source-map --quiet --watch
```

## 🔄 Alternative: Using Grunt (Legacy)

The theme includes Grunt configuration, but requires Ruby Sass (deprecated):

```bash
grunt sass
```

**Note:** We recommend using the modern Dart Sass approach above instead.

## 📁 File Structure

```
assets/
├── css/
│   ├── source/           # SCSS source files (edit these)
│   │   ├── global.scss   # Main stylesheet
│   │   ├── admin.scss    # Admin panel styles
│   │   ├── editor.scss   # Block editor styles
│   │   ├── abstracts/    # Variables, mixins, functions
│   │   ├── base/         # Base styles, grid, typography
│   │   ├── components/   # Component styles
│   │   ├── layout/       # Layout styles
│   │   │   ├── _woocommerce.scss  # WooCommerce shop styles
│   │   │   └── ...
│   │   └── ...
│   └── build/            # Compiled CSS (don't edit directly)
│       ├── global.css    # Compiled main stylesheet
│       ├── admin.css     # Compiled admin styles
│       └── editor.css    # Compiled editor styles
├── js/
│   ├── source/           # JavaScript source files
│   └── build/            # Compiled JS
└── package.json          # npm dependencies
```

## 🛠️ Common Tasks

### After Editing SCSS Files

1. Compile the CSS:
   ```bash
   npx sass css/source/global.scss css/build/global.css --no-source-map --quiet
   ```

2. Clear WordPress cache (if using caching plugins)

3. Hard refresh browser (Ctrl+Shift+R or Cmd+Shift+R)

### WooCommerce Style Updates

WooCommerce shop styles are in:
```
css/source/layout/_woocommerce.scss
```

After editing, compile global.css:
```bash
npx sass css/source/global.scss css/build/global.css --no-source-map --quiet
```

## 🚀 Production Deployment

For production, compile with compression:

```bash
npx sass css/source/global.scss css/build/global.css --style=compressed --no-source-map --quiet
npx sass css/source/admin.scss css/build/admin.css --style=compressed --no-source-map --quiet
npx sass css/source/editor.scss css/build/editor.css --style=compressed --no-source-map --quiet
```

## ⚡ Performance Tips

1. **Use `--quiet` flag** - Significantly speeds up compilation by hiding deprecation warnings
2. **Use `--no-source-map`** - Smaller file size for production
3. **Compile only changed files** - Don't recompile all three CSS files if you only changed one
4. **Watch mode for development** - Use `--watch` flag during active development

## ⚠️ Troubleshooting

### "Command not found: sass"
**Solution:** Install dependencies first:
```bash
npm install
```

### Compilation is slow
**Solution:** Use the `--quiet` flag:
```bash
npx sass css/source/global.scss css/build/global.css --no-source-map --quiet
```

### Changes not showing on website
1. Clear WordPress cache
2. Hard refresh browser (Ctrl+Shift+R)
3. Check that you edited files in `css/source/` not `css/build/`
4. Verify compilation completed without errors

### "Cannot find module" errors
**Solution:** Reinstall dependencies:
```bash
rm -rf node_modules
npm install
```

## 📝 Notes

- **Never edit files in `css/build/` directly** - They will be overwritten on next compile
- **Always edit SCSS files in `css/source/`**
- The theme uses `filemtime()` for automatic cache busting
- Compilation output is automatically loaded by WordPress via `inc/enqueue.php`

## 🎯 Quick Reference

| Task | Command |
|------|---------|
| Fast compile | `npx sass css/source/global.scss css/build/global.css --no-source-map --quiet` |
| Watch mode | `npx sass css/source/global.scss css/build/global.css --no-source-map --watch` |
| Production build | Add `--style=compressed` flag |
| Debug build | Use `--style=expanded` flag |

## 📞 Support

For issues or questions about the compilation process, refer to:
- [Sass Documentation](https://sass-lang.com/documentation)
- [Dart Sass CLI](https://sass-lang.com/documentation/cli/dart-sass)

---

**Last Updated:** December 19, 2025  
**Theme Version:** CloudMom Custom Theme  
**Maintained by:** Development Team

