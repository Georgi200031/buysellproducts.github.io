# Buy / Sell Products

Learning prototype for a product catalogue using PHP, PostgreSQL and HTML/CSS.

## Contents

- index.html: product-entry form.
- addproduct.php: inserts a product.
- view_products.php: lists products.
- delete.php: removes a product.

## Run locally

Use a PHP server with the PostgreSQL extension and a local PostgreSQL database. GitHub Pages cannot execute PHP. The repository does not include a database migration: provide the products table with id, name, price and image columns before using the prototype.

The current implementation contains direct SQL interpolation, unescaped output and unauthenticated deletion via GET. Treat it as a local learning prototype; it needs parameterized queries, output escaping, authentication and CSRF protection before deployment. A file input alone does not implement file upload handling.

## Maintenance

Preserve the existing source and sample assets when making changes. Do not commit credentials, personal data or generated build output. This review documents the checked-in project; it does not certify production readiness or a successful build on every platform.
