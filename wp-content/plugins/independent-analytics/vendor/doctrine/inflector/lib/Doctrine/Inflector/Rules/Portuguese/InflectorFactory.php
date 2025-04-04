<?php

declare (strict_types=1);
namespace IAWPSCOPED\Doctrine\Inflector\Rules\Portuguese;

use IAWPSCOPED\Doctrine\Inflector\GenericLanguageInflectorFactory;
use IAWPSCOPED\Doctrine\Inflector\Rules\Ruleset;
/** @internal */
final class InflectorFactory extends GenericLanguageInflectorFactory
{
    protected function getSingularRuleset() : Ruleset
    {
        return Rules::getSingularRuleset();
    }
    protected function getPluralRuleset() : Ruleset
    {
        return Rules::getPluralRuleset();
    }
}
