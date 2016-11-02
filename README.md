# WP REST API extra routes for all categories

This plugin adds an endpoint for all categories.
Requires WP API Version 2.0 Beta 13.1 or higher.

## Why do we need this plugin?

The `/wp-json/wp/v2/categories` API only returns categories gotten by `get_categories()`, which is not the all categories.
This plugin adds an API to get all the categories by `get_terms('category')`.

## Usage

```
$ curl --user "$username:$password" -X GET http://example.com/wp-json/wp/v2/all-categories | jq '.'
[
  {
    "term_id": 1,
    "name": "foo",
    "slug": "foo-slug",
    "term_group": 0,
    "term_taxonomy_id": 1,
    "taxonomy": "category",
    "description": "description about foo",
    "parent": 0,
    "count": 167,
    "filter": "raw",
    "term_order": "0"
  },
  {
    "term_id": 4,
    "name": "bar",
    "slug": "slug-bar",
    "term_group": 0,
    "term_taxonomy_id": 4,
    "taxonomy": "category",
    "description": "description about bar",
    "parent": 1,
    "count": 5,
    "filter": "raw",
    "term_order": "0"
  },
  ...
]
```
