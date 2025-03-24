<p align="center">
    <img src="https://emojicdn.elk.sh/🍱" width="48" height="48">
</p>

# bento

Bento is an opinionated Laravel Starter Kit, based on the official [React Starter Kit](https://github.com/laravel/react-starter-kit).

It comes with the following customizations:

- Sensible defaults in `AppServiceProvider.php`
- Custom Pint config
- PHPStan
- Custom Composer scripts:
  - `lint` – Runs Pint
  - `test:lint` – Runs Pint in test mode
  - `test:types` – Runs PHPStan
  - `test:pest` – Runs tests with Pest
  - `test` – Runs all previous `test:*` commands

## Usage

Run this command to initialize a new Laravel project using this starter kit:

```bash
laravel new my-app --using=jatnnik/bento
```
