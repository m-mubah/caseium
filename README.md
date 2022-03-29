# Caseium

## Requirements
- PHP > 7.3
- Composer
- Laravel Zero Framework

## Usage
Navigate to project directory before typing the commands.

```bash
composer update
php caseium convert-case
```
- this will prompt the user to input a string.
- this string must contain at least one english letter.

To view all commands:
```bash
php caseium
```

Tested on Fedora-WSL.

## Running tests
To run the test first update the application environment to development. It is set to production as there are un-necessary commands available in development mode.
- Open Config\App.php and uncomment ```env=>'development'``` and comment ```'production'=>'true'``` (line 43 and 44).
- In terminal type:
```bash
php caseium test
```

## License
[MIT](https://choosealicense.com/licenses/mit/)