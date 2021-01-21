<?php

namespace AmpProject\Tooling\Validator\SpecGenerator\Section;

use AmpProject\Tooling\Validator\SpecGenerator\ConstantNames;
use AmpProject\Tooling\Validator\SpecGenerator\Dumper;
use AmpProject\Tooling\Validator\SpecGenerator\FileManager;
use AmpProject\Tooling\Validator\SpecGenerator\Section;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpNamespace;

final class DescendantTagList implements Section
{
    use ConstantNames;

    /**
     * Dumper instance to use.
     *
     * @var Dumper
     */
    private $dumper;

    /**
     * DescendantTagList constructor.
     */
    public function __construct()
    {
        $this->dumper = new Dumper();
    }

    /**
     * Process a section.
     *
     * @param FileManager  $fileManager FileManager instance to use.
     * @param array        $spec        Associative array of spec data that was decoded from the JSON file.
     * @param PhpNamespace $namespace   Namespace object of the section.
     * @param ClassType    $class       Class object of the section.
     * @return void
     */
    public function process(FileManager $fileManager, $spec, PhpNamespace $namespace, ClassType $class)
    {
        $propertyName = lcfirst($class->getName());

        $namespace->addUse('AmpProject\\Extension');
        $namespace->addUse('AmpProject\\Tag', 'Element');
        $namespace->addUse('AmpProject\\Internal');

        $class->addProperty($propertyName)
              ->addComment('@var array');

        $constructor = $class->addMethod('__construct');
        $constructor->addBody('$this->? = [', [$propertyName]);

        foreach ($spec as $data) {
            $key = $data['name'];
            $tags = [];
            foreach ($data['tag'] as $tag) {
                $tags[] = $this->getTagConstant($this->getConstantName($tag));
            }
            $constructor->addBody("    {$this->dumper->dumpWithKey($key, $tags, 1)}");
        }

        $constructor->addBody('];');
    }
}
