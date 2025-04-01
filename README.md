# Doctrine Entity Traits · ![License](https://img.shields.io/github/license/eelan/doctrine-traits) ![PHP](https://img.shields.io/badge/PHP-^8.1-blue) ![Symfony](https://img.shields.io/badge/Symfony-Compatible-brightgreen)

Reusable PHP traits for Doctrine entities, designed for Symfony projects.

This library provides a collection of common traits to reduce boilerplate code when working with Doctrine ORM.

---

## 📦 Installation

Install via Composer:

```bash
composer require eelan/doctrine-traits
```

> ⚠️ If the package is not yet published on Packagist, you can include the GitHub repository manually in your `composer.json`.

---

## 🧱 Available Traits

- `AddressTrait` – Street, number, postal code, city, region, country
- `TimestampTrait` – `createdAt`, `updatedAt` (with lifecycle callbacks)
- `SoftDeleteTrait` – `deletedAt`
- `PhoneTrait`, `EmailTrait`
- `NameTrait`, `BirthTrait`, `GenderTrait`
- ...more coming soon!

---

## 🛠 Usage

In your Doctrine entity:

```php
use Eelan\DoctrineTraits\Trait\AddressTrait;

class Person
{
    use AddressTrait;

    // your custom fields...
}
```

All fields are mapped using PHP 8+ attributes (`#[ORM\Column(...)]`).

---

## 🧪 Example Entity

See [examples/Person.php](examples/Person.php) for a complete example using all traits.

---

## 📄 License

This project is licensed under the MIT License.  
See the [LICENSE](LICENSE) file for details.

---

## 🙌 Contributions

Contributions are welcome!  
Feel free to open an issue or submit a pull request with new traits or improvements.
