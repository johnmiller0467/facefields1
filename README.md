# FacadeFields — Farm Website (PHP)

A 10-page PHP website for a working farm, built with plain PHP includes
(no framework required) and a custom design system.

## Pages included

- `index.php` — Home
- `about.php` — About Us
- `services.php` — Services (equipment leasing, consultancy, tours, boxes)
- `products.php` — Produce / price list
- `gallery.php` — Photo gallery
- `blog.php` — Field Notes blog (list view + single-post view via `?post=slug`)
- `faq.php` — FAQs
- `contact.php` — Contact Us, with a working server-side validated form
- `terms.php` — Terms & Conditions
- `privacy.php` — Privacy Policy

Shared markup lives in `includes/header.php` and `includes/footer.php`;
site-wide settings (site name, contact details, nav menu) live in
`includes/config.php` — edit that one file to update them everywhere.

## Requirements

- PHP 7.4+ (tested on PHP 8.3)
- Any web server that runs PHP (Apache, Nginx + PHP-FPM), or PHP's
  built-in server for local testing

## Running it locally

From the project folder:

```
php -S localhost:8000
```

Then open http://localhost:8000/index.php in a browser.

## Placeholder images

Photos throughout the site are pulled live from **LoremFlickr**
(`loremflickr.com`), a free keyword-based placeholder image service, so
the whole site has relevant farm imagery out of the box with no files
to manage. They'll load automatically anywhere with normal internet
access.

Before going live, replace them with your own photos: swap each
`<img src="https://loremflickr.com/...">` for a local file (e.g.
`/assets/images/your-photo.jpg`) once you have real photography of the
farm, produce and team.

## Contact form

`contact.php` validates the name, email and message fields server-side
and shows a confirmation message on success. Actually sending the
message (email, database, etc.) is left as a commented-out example
using PHP's `mail()` function inside `contact.php` — most hosts need a
configured mail service (or a provider like SMTP/SES/SendGrid) for
`mail()` to work reliably, so wire that up once you know how the site
will be hosted.

## Map on the Contact page

The Contact page embeds an OpenStreetMap iframe as a placeholder map —
update the `bbox` coordinates in `contact.php` to your actual location,
or swap in a Google Maps embed if you prefer.

## Customizing

- Colors, fonts and layout rules live in `assets/css/style.css`.
- Site name, tagline, address, phone, email and nav links live in
  `includes/config.php`.
- Blog posts are defined as a PHP array at the top of `blog.php` —
  add a new entry to publish a new post.
- Farm-shop products are defined as a PHP array at the top of
  `products.php`.
