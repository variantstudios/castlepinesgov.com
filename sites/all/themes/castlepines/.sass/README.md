# General Guidelines #

* Use ```bundle exec compass watch``` to ensure proper gem versions are used and things don't explode.
* Dont be afraid to make new partial files - avoid writing novellas of .scss files, and keep partials around 100 lines max so they're easy to scan.
* Organize with naming conventions that make sense for drupal and the site components
* Standardize on compass and anything else invented elsewhere that we're using - don't reinvent the wheel when many a wheels are around.

Example Partial Structure:
```
  Layout
  |_ _layout.scss
  Global
  |_ _global.scss
  |_ _functions.scss
  |_ _mixins.scss
  |_ _variables.scss
  |_ _extends.scss
  Styleguide (This folder is based of the styleguide module and sections)
  |_ _styleguide.scss
  |_ _text.scss
  |_ _forms.scss
  |_ and so on... (see http://github.com/timodwhit/bare for full breakdown)
  Design
  |_ _design.scss
  |_ blocks
    |_ _blocks.scss
    |_ views
      |_ _views.scss
      |_ view_name
        |_ _view_name.scss
        |_ _view_id.scss
        |_ _view_id_1.scss
    |_ user
      |_ _user.scss
      |_ _user_login.scss
    |_ and so on...
  |_ node
    |_ _node.scss
    |_ node_type
      |_ _node_type.scss
  |_ field
    |
    |_ _field_id.scss
  |_ and so on...
```

More good guidelines: https://github.com/csswizardry/CSS-Guidelines