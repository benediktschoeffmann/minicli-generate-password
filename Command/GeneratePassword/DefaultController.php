<?php
namespace BenByron\Command\GeneratePassword;

use Minicli\App;
use Minicli\Command\CommandCall;
use Minicli\Command\CommandController;

class DefaultController extends CommandController {

    public function boot(App $app, CommandCall $input): void
    {
        parent::boot($app, $input);
        // $this->command_map = $app->commandRegistry->getCommandMap();
    }

    public function handle(): void {
        $allChars = "abcdefghiklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!§$%&~+-_:.;,";

        //
        $standardLength = $this->config->has('length') ? $this->config->length : 12;
        $maxLength = $this->hasParam('length') ? $this->getParam('length') : $standardLength;

        $password = '';

        $length = $maxLength;
        
        // the first character should be lowercase
        $password = substr($allChars, rand(0, 26), 1);
        $length--;
        


        while ($length >= 0) {
            $password .= substr($allChars, rand(0, 74), 1);
            $length--;
        }

        $this->newline();
        $this->out(sprintf('Generated Password: %s', $password));
        $this->newline();
    }

}
