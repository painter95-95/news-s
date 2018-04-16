# yii2-select-map-location
Yii2 widget to select location at map and choose map coordinates

This extension adds functionality to select the location on the Google map. The extension indicates the model and attributes, which stores the address, latitude and longitude.

When choosing a location map of switches and sets the marker to the selected location. The attributes recorded address and coordinates of the selected location.

## Install

Run at your console:
```bash
php composer.phar require "kalyabin/yii2-select-google-map-location" "dev-master"
```

## Register Google API

First, register your Google API key as described: [Google API Documentation](https://developers.google.com/maps/documentation/javascript/get-api-key)

After this, enable at [Google console](https://console.developers.google.com/):

* Google Map JavaScript API (remember API key)
* Google Places API Web Service

## Usage

Declare model class which will save geographic coordinates:

```php
class SearchLocation extends \yii\base\Model
{
    ...
    public $address;
    public $longitude;
    public $latitude;
    ...
}
```

Render widget:
```php
$model = new SearchLocation();
$form = \yii\widgets\ActiveForm::begin();
...
$form->field($model, 'address')->widget(\kalyabin\maplocation\SelectMapLocationWidget::className(), [
    'attributeLatitude' => 'latitude',
    'attributeLongitude' => 'longitude',
    'googleMapApiKey' => '<YOUR_REGISTERED_GOOGLE_MAP_API>',
]);
...
\yii\widgets\ActiveForm::end();
```
