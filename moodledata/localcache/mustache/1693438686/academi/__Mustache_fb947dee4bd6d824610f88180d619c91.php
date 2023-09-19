<?php

class __Mustache_fb947dee4bd6d824610f88180d619c91 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="search-widget d-flex dropdown" data-searchtype="group">
';
        $buffer .= $indent . '    <div
';
        $buffer .= $indent . '        tabindex="0"
';
        $buffer .= $indent . '        aria-expanded="false"
';
        $buffer .= $indent . '        role="combobox"
';
        $buffer .= $indent . '        aria-haspopup="dialog"
';
        $buffer .= $indent . '        aria-controls="dialog-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '        data-toggle="dropdown"
';
        $buffer .= $indent . '        class="btn dropdown-toggle d-flex text-left align-items-center p-0"
';
        $buffer .= $indent . '        data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '        data-action-base-url="';
        $value = $this->resolveValue($context->find('groupactionbaseurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '        aria-label="';
        $value = $context->find('cleanstr');
        $buffer .= $this->sectionF4704697d0f6f8050ff3b4075ffe91c8($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        data-input-element="input-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '        <div class="align-items-center d-flex">
';
        $buffer .= $indent . '            <div class="d-block pr-3">
';
        $buffer .= $indent . '                <span class="d-block small">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '                <span class="p-0 font-weight-bold">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('selectedgroup'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="dropdown-menu narrow" id="dialog-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" role="dialog" aria-modal="true" aria-label="';
        $value = $context->find('cleanstr');
        $buffer .= $this->sectionF4704697d0f6f8050ff3b4075ffe91c8($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <input type="hidden" name="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" value="';
        $value = $this->resolveValue($context->find('group'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" id="input-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" />
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF4704697d0f6f8050ff3b4075ffe91c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' selectagroup, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' selectagroup, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
