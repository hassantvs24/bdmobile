#### BD Mobile

This is a Laravel package for mobile number validators & change the mobile number format for Bangladeshi mobile operators. 

### Installation
 
Install the package through [Composer](http://getcomposer.org). On the command line:

```
composer require naztech/bdmobile
```

### Configuration
If Laravel > 7, no need to add provider

Add the following to your providers array in `config/app.php`:

```
'providers' => [
    // ...

    Naztech\BdMobile\BdMobileServiceProvider::class,
],
```

#### Example Use 

```
use Naztech\BdMobile\BdMobile;
```

**Validate**

```
    $mobile = new BdMobile(); //Initilization
    $mobile->valid('01675870047'); //Output: true
    $mobile->valid('+8801675870047'); //Output: true
    $mobile->valid('+8801675870047'); //Output: true
    $mobile->valid('1675870047'); //Output: trhow error exception
```

**Format**
    
```
    $mobileNumber = '01675870047';

    $mobile = new BdMobile(); //Initilization
    $mobile->simple($mobileNumber); //Output: 1675870047
    $mobile->normal($mobileNumber); //Output: 01675870047
    $mobile->extend($mobileNumber); //Output: 8801675870047
    $mobile->full($mobileNumber); //Output: +8801675870047
    $mobile->fullex($mobileNumber); //Output: 008801675870047
```


## License

BD Mobile number validator & formatter is licensed under [The MIT License (MIT)](LICENSE).
