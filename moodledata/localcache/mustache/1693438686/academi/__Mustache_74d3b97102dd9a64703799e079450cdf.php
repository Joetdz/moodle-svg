<?php

class __Mustache_74d3b97102dd9a64703799e079450cdf extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('buttonheader');
        $buffer .= $this->section76a0646f2b119c328db0c2b1993c99c1($context, $indent, $value);
        $buffer .= $indent . '<div class="';
        $value = $context->find('parentclasses');
        $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="';
        $value = $context->find('buttonclasses');
        $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
        $buffer .= ' btn dropdown-toggle keep-open d-flex text-left align-items-center p-0 font-weight-bold" data-toggle="dropdown" aria-haspopup="true" ';
        $value = $context->find('usebutton');
        $buffer .= $this->section383076bedce3880216fa0ac11ef1d3fe($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('usebutton');
        if (empty($value)) {
            
            $buffer .= 'tabindex="-1"';
        }
        $buffer .= ' aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionB1f57f5e32e8b37924c5e8db06b78c0d($context, $indent, $value);
        $buffer .= '" >
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('buttoncontent'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="';
        $value = $context->find('dropdownclasses');
        $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
        $buffer .= ' dropdown-menu ';
        $value = $context->find('rtl');
        $buffer .= $this->sectionC55426752e65d1a1a7fcbe1c5800f8c1($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <div class="w-100 p-3" data-region="placeholder">
';
        $value = $context->find('renderlater');
        $buffer .= $this->sectionDf80c4427fd192553257876f1e87f6be($context, $indent, $value);
        $value = $context->find('renderlater');
        if (empty($value)) {
            
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('dropdowncontent'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section76a0646f2b119c328db0c2b1993c99c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <small>{{.}}</small>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <small>';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</small>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6922901afa7b60d3ce7403587f8d6c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section383076bedce3880216fa0ac11ef1d3fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'role="button" aria-expanded="false" tabindex="0"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'role="button" aria-expanded="false" tabindex="0"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1f57f5e32e8b37924c5e8db06b78c0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria-toggledropdown, core_grades ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' aria-toggledropdown, core_grades ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC55426752e65d1a1a7fcbe1c5800f8c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dropdown-menu-right';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dropdown-menu-right';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf80c4427fd192553257876f1e87f6be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="d-flex flex-column align-items-stretch justify-content-between" style="height: 150px; width: 300px;">
                    <div class="bg-pulse-grey w-100 h-100 my-1"></div>
                    <div class="bg-pulse-grey w-100 h-100 my-1"></div>
                    <div class="bg-pulse-grey w-100 h-100 my-1"></div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="d-flex flex-column align-items-stretch justify-content-between" style="height: 150px; width: 300px;">
';
                $buffer .= $indent . '                    <div class="bg-pulse-grey w-100 h-100 my-1"></div>
';
                $buffer .= $indent . '                    <div class="bg-pulse-grey w-100 h-100 my-1"></div>
';
                $buffer .= $indent . '                    <div class="bg-pulse-grey w-100 h-100 my-1"></div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
