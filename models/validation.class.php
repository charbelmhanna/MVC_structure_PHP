<?php
class Validator
{

    private $_errors = [];

    public function validate($src, $rules = [])
    {

        foreach ($src as $item => $item_value) {
            if (key_exists($item, $rules)) {
                foreach ($rules[$item] as $rule => $rule_value) {

                    if (is_int($rule)) {
                        $rule = $rule_value;
                    }

                    switch ($rule) {
                        case 'required':
                            if (empty($item_value) && $rule_value) {
                                $this->addError($item, ucwords($item) . ' required');
                            }
                            break;

                        case 'minLen':
                            if (strlen($item_value) < $rule_value) {
                                $this->addError($item, ucwords($item) . ' should be minimum ' . $rule_value . ' characters');
                            }
                            break;

                        case 'maxLen':
                            if (strlen($item_value) > $rule_value) {
                                $this->addError($item, ucwords($item) . ' should be maximum ' . $rule_value . ' characters');
                            }
                            break;

                        case 'numeric':
                            if (!ctype_digit($item_value) && $rule_value) {
                                $this->addError($item, ucwords($item) . ' should be numeric');
                            }
                            break;
                        case 'alpha':
                            if (!ctype_alpha($item_value) && $rule_value) {
                                $this->addError($item, ucwords($item) . ' should be alphabetic characters');
                            }
                    }
                }
            }
        }
    }

    public function filter_data($data)
    {
        $data = strip_tags($data);
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = filter_var($data, FILTER_SANITIZE_STRING);
        return $data;
    }

    private function addError($item, $error)
    {
        $this->_errors[$item][] = $error;
        $_SESSION['validation']['form'] = array();
        $_SESSION['validation']['form'] = $error;
    }

    public function error()
    {
        if (empty($this->_errors)) {
            return false;
        }

        return $this->_errors;
    }
}

?>