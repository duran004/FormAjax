# FormAjax

[![Total Downloads](https://img.shields.io/packagist/dt/dcyilmaz/formajax.svg?style=flat-square)](https://packagist.org/packages/dcyilmaz/formajax)

FormAjax is a javascript module that automatically submits your forms. In this way, you do not need to write extra xhr codes at the bottom of each page. 

## Installation

You can install the package via Composer:

### Install package
```bash
composer require dcyilmaz/formajax
```
### Publish public
```bash
php artisan vendor:publish --tag=public --force
```
### Call the file in footer
```bash
<script src="{{ asset('vendor/formajax/formajax.js') }}"></script>
```
### Things to watch out for!
Formajax's return type should be response json
```
{
status= true|false,
message="string"
}
```
For example, your method that brings a member in laravel should be like this
```
public function show(string $id)
    {
        $user = User::find($id);
        return response()->json([
            'status' => true,
            'message' => view('admin.users.show', compact('user'))->render()
        ]);
    }
```
Your status code must be 200 in the return type, otherwise the error confirm alert will warn you.
You can modify the javascript file for further settings and editing.
