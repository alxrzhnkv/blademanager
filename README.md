# Blade Manager
Provides custom blade directives inc input, textarea, select, checkbox and buttons for Laravel


## Stability Notice
This package is actively being developed and we would like to get feedback to improve it. Please feel free to submit feedback.



## Requirements
* PHP 5.5
* Laravel
* composer



## Installation

### Composer
Run the following to include this via Composer

```
composer require bespoke/blademanager
```


### Configuration

#### Laravel 5
To install into a Laravel 5 project, first do the composer install then add the following class to your config/app.php service providers list.

```
Bespoke\BladeManager\BladeManagerServiceProvider::class,
```



## Usage

### Input
```
@input(['label' => 'First Name', 'name' => 'first_name', 'value' => $user->first_name])
```


### Textarea
```
@textarea(['label' => 'Notes', 'name' => 'notes', 'value' => $user->notes])
```


### Select
```
@select([
    'class'    => 'chosen-select',
    'label'    => 'Departments',
    'name'     => 'departments[]',
    'value'    => $user->departments->pluck('id')->toArray(),
    'options'  => $departments,
    'multiple' => 'true'
])
```


### Checkbox
```
@checkbox([
    'label' => 'Has Driving License',
    'name'  => 'has_driving_license',
    'value' => $user->has_driving_license
])
```


### Static
```
@static(['name' => 'first_name', 'value' => $user->first_name])
```


### Time Picker
```
@timePicker(['name' => 'start_time', 'value' => $user->start_time])
```


### Date Picker
```
@datePicker(['name' => 'start_date', 'value' => optional($user->start_date)->format('d/m/Y H:i')])
```


### Error
```
@error(['name' => 'first_name'])
```


### Label
```
@label(['name' => 'first_name'])
```


### Create Button
```
@createButton(['name' => 'Create User', 'url' => route('user.create')])
```


### Save Button
```
@saveButton(['name' => 'Save User'])
```


### Show Button
```
@showButton(['name' => 'View User', 'url' => route('user.show', $user->id)])
```


### Edit Button
```
@editButton(['name' => 'Edit User', 'url' => route('user.edit', $user->id)])
```


### Delete Button
```
@deleteButton(['name' => 'Delete User', 'url' => route('user.destroy', $user->id)])
```


### Back Button
```
@backButton(['name' => 'User', 'url' => route('user.index')])
```
