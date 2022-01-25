<?php

require_once __DIR__ . '/Person.php';

class  mananger extends Person
{
    protected bool $assistantSupport;
    protected bool $deputyMem;

    public function __construct(string $name, string $age,
        string $model, string $company,
        bool $assistantSupport=FALSE, bool $deputyMem=TRUE)
    {
        parent::__construct($name, $age, $model, $company);
        $this->assistantSupport = $assistantSupport;
        $this->deputyMem = $deputyMem;
    }

    public function setassistantSupport($mode=TRUE)
    {
        if ($this->assistantSupport != $mode) {
            print("Adding Support Updated.\n");
        }
        else {
            $this->assistantSupport = $mode;
            $modeString = (string) $mode;
            print("Adding Support Updated $modeString.\n");
        }
    }

    public function addDeputy()
    {
        if ($this->deputyMem) {
            print("DeputyMem already supported.\n");
        }
        else {
            $this->deputyMem = TRUE;
            print("Led Screen added.\n");
        }
    }

    public function skillCheck()
    {
        print("Checked English.\n");
        print("Checked Prepenstation.\n");
        print("Checked Mindset.\n");
        print("Checked Teamworking.\n");
    }
}

