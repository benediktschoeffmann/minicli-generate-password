# Generate Password mini-console-app

I wanted to playaround with this library `minicli/minicli`: [minicli](https://docs.minicli.dev/en/latest/)\
Since I had to generate several passwords recently, this use-case came to mind.

## Running

After cloning the repo and running `composer install`, generate passwords like this:

```bash
./minicli generatepassword length=15
```

If you want to set a standard value for length, edit `config/standard.php`.

Happy generating!
