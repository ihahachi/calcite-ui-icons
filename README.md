# Calcite UI Icons for Laravel
![Calcite Design System Icons](https://github.com/user-attachments/assets/60fa5660-fc61-406b-b102-62a6c9b19ca7)




Blade component package to easily use Calcite UI Icons in Laravel applications.

This package provides a clean and simple way to render Calcite UI Icons using Blade components with configurable defaults, publishable configuration, and test support.

---

# 📦 Installation

Install the package via Composer:

```bash
composer require ihahachi/calcite-ui-icons
```

Laravel automatically discovers the service provider.

---

# 🚀 Usage

Use the icon component directly in your Blade views.

```blade
<x-calcite-icon icon="layer" />
```

With custom class:

```blade
<x-calcite-icon icon="search" class="w-6 h-6 text-gray-500" />
```

Full example:

```blade
<div class="flex items-center gap-2">
    <x-calcite-icon icon="user" class="w-5 h-5 text-blue-500" />
    <span>User Section</span>
</div>
```

---

# 🎯 Icon Names

All available icons come from the Calcite UI Icons library.

Browse icons here:

https://esri.github.io/calcite-ui-icons/

Copy the icon name and use it in the component.

Example:

```
user
search
download
upload
layer
plus
minus
trash
```

Usage:

```blade
<x-calcite-icon icon="download" />
```

---

# 🧩 Component Props

| Prop  | Type   | Default      | Description                     |
| ----- | ------ | ------------ | ------------------------------- |
| icon  | string | required     | Icon name from Calcite UI Icons |
| class | string | config value | CSS classes                     |

Example:

```blade
<x-calcite-icon icon="download" class="w-6 h-6" />
```

---

# ⚙️ Configuration

Publish the config file:

```bash
php artisan vendor:publish --tag=calcite-icons-config
```

This will create:

```
config/calcite-icons.php
```

---

# 🛠 Config File

```php
return [

    'class' => 'w-5 h-5',

    'auto_load' => true,

];
```

### Available Options

| Option    | Description                 |
| --------- | --------------------------- |
| class     | Default icon class          |
| auto_load | Auto load Calcite UI script |

---

# 🧪 Testing

Run tests using Pest.

```bash
vendor/bin/pest
```

or

```bash
composer test
```

---

# 🤝 Contributing

Contributions are welcome.

1. Fork the repository
2. Create a branch

```bash
git checkout -b feature/new-feature
```

3. Commit changes

```bash
git commit -m "Add new feature"
```

4. Push

```bash
git push origin feature/new-feature
```

5. Create Pull Request

---

# 📄 License

MIT License

---

# ❤️ Credits

- Calcite UI Icons

---

# 🔗 Resources

Calcite UI Icons

https://esri.github.io/calcite-ui-icons/

---

# ⭐ Support

If you find this package useful, please consider giving it a star on GitHub.
