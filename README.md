# IT Source Providers

A php sdk to interface with (https://attendance.itsourceproviders.com//)

# Classes

  - ITSourceProviders\Attendance\User
  - ITSourceProviders\Attendance\Course


Mark teacher and student attendance


### Installation



```sh
composer require wwwitsourceproviders/attendance
```


### Development

```sh
require 'vendor/autoload.php';
try {
    ITSourceProviders\Attendance\Config\Setting::setCredentials('credentials.json');
    ITSourceProviders\Attendance\User::addAttendance(
	'daniel@itsourceproviders.net',
	date('Y-m-d H:i:s'),
	ITSourceProviders\Attendance\AttendanceState::PRESENT
   );
    ITSourceProviders\Attendance\Course::addAttendance(
	'ExpirementalHumanandSocialcbXghudrk',
	'daniel@itsourceproviders.net',
	date('Y-m-d H:i:s'),
	ITSourceProviders\Attendance\AttendanceState::PRESENT
   );
    ITSourceProviders\Attendance\Course::addGoogleAttendance(
	'242880195678',
	'daniel@itsourceproviders.net',
	date('Y-m-d H:i:s'),
	ITSourceProviders\Attendance\AttendanceState::PRESENT
   );
} catch (Error $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}
```
