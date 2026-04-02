# Calcite UI Icons for Laravel

Blade component package for using Calcite UI Icons inside Laravel applications.

This package provides a clean and simple way to use Calcite UI icons as Blade components.

---

# 📦 Installation

Install the package via Composer:

```bash
composer require ihahachi/calcite-ui-icons
```

Laravel will automatically discover the service provider.

---

# 🚀 Usage

You can use the icon component directly in your Blade views.

```blade
<x-calcite-icon icon="map" />
```

With custom class:

```blade
<x-calcite-icon icon="search" class="w-5 h-5" />
```

With Tailwind styling:

```blade
<x-calcite-icon icon="user" class="text-gray-500 w-6 h-6" />
```

---

# 🎯 Icon Names

To find available icon names, visit:

https://esri.github.io/calcite-ui-icons/

Copy the icon name and use it inside the component.

Example:

```
map
user
search
layer
plus
minus
trash
download
upload
```

Usage:

```blade
<x-calcite-icon icon="download" />
```

---

# 🧩 Component Syntax

```blade
<x-calcite-icon
    icon="map"
    class="w-5 h-5"
/>
```

### Props

| Prop  | Type   | Description                     |
| ----- | ------ | ------------------------------- |
| icon  | string | Icon name from Calcite UI Icons |
| class | string | Optional CSS class              |

---

# 🖼 Example

```blade
<div class="flex items-center gap-2">
    <x-calcite-icon icon="map" class="w-5 h-5 text-blue-500" />
    <span>Map</span>
</div>
```

---

# 📁 Package Structure

```
calcite-ui-icons
│
├── src
│   ├── Components
│   │   └── Icon.php
│   │
│   ├── resources
│   │   └── views
│   │       └── icon.blade.php
│   │
│   └── CalciteIconsServiceProvider.php
│
├── composer.json
├── README.md
└── LICENSE
```

---

# ⚙️ Requirements

- PHP 8.1+
- Laravel 8.0 or higher

---

# 🛠 Development

Clone the repository:

```bash
git clone https://github.com/ihahachi/calcite-ui-icons.git
```

Install dependencies:

```bash
composer install
```

---

# 📦 Publish New Version

```bash
git tag v1.0.0
git push origin v1.0.0
```

Packagist will update automatically.

---

# 🤝 Contributing

Contributions are welcome.

1. Fork the repository
2. Create a new branch
3. Make your changes
4. Submit a pull request

---

# 📄 License

This package is open-sourced software licensed under the MIT license.

---

# ❤️ Credits

- Calcite UI Icons
- Laravel Blade Components

---

# 🔗 Resources

Calcite UI Icons source:

https://esri.github.io/calcite-ui-icons/

---

# 🧠 Future Features

- icon size property
- icon color property
- inline SVG support
- Tailwind presets
- Livewire integration
- config publishing
- caching icons

---

# ⭐ Support

If you find this package useful, please consider giving it a star on GitHub.
