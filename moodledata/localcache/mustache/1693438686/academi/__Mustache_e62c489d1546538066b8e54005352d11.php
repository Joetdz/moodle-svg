<?php

class __Mustache_e62c489d1546538066b8e54005352d11 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="enrol_fee_payment_region text-center">
';
        $value = $context->find('isguestuser');
        $buffer .= $this->section38fd2bd43c2dfb0fe4eedd2d106a429f($context, $indent, $value);
        $value = $context->find('isguestuser');
        if (empty($value)) {
            
            $buffer .= $indent . '        <p>';
            $value = $context->find('str');
            $buffer .= $this->section211f90203122a7e6b2ae842ab0304767($context, $indent, $value);
            $buffer .= '</p>
';
            $buffer .= $indent . '        <p><b>';
            $value = $this->resolveValue($context->find('cost'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '</b></p>
';
            $buffer .= $indent . '        <button
';
            $buffer .= $indent . '            class="btn btn-secondary"
';
            $buffer .= $indent . '            type="button"
';
            $buffer .= $indent . '            id="gateways-modal-trigger-';
            $value = $this->resolveValue($context->find('uniqid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '            data-action="core_payment/triggerPayment"
';
            $buffer .= $indent . '            data-component="enrol_fee"
';
            $buffer .= $indent . '            data-paymentarea="fee"
';
            $buffer .= $indent . '            data-itemid="';
            $value = $this->resolveValue($context->find('instanceid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '            data-cost="';
            $value = $this->resolveValue($context->find('cost'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '            data-successurl="';
            $value = $this->resolveValue($context->find('successurl'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '            data-description="';
            $value = $this->resolveValue($context->find('description'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '"
';
            $buffer .= $indent . '        >
';
            $buffer .= $indent . '            ';
            $value = $context->find('str');
            $buffer .= $this->sectionEa16ab9298c7b6ebc84b7332872bce10($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </button>
';
        }
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->sectionEb5288a974c63be225026ddca9f49851($context, $indent, $value);

        return $buffer;
    }

    private function section211f90203122a7e6b2ae842ab0304767(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' paymentrequired ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' paymentrequired ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAbad3ca8a99064d47812b014baa9a7e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loginsite ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' loginsite ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38fd2bd43c2dfb0fe4eedd2d106a429f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="mdl-align">
            <p>{{# str }} paymentrequired {{/ str}}</p>
            <p><b>{{cost}}</b></p>
            <p><a href="{{config.wwwroot}}/login/">{{# str }} loginsite {{/ str }}</a></p>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="mdl-align">
';
                $buffer .= $indent . '            <p>';
                $value = $context->find('str');
                $buffer .= $this->section211f90203122a7e6b2ae842ab0304767($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '            <p><b>';
                $value = $this->resolveValue($context->find('cost'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</b></p>
';
                $buffer .= $indent . '            <p><a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/login/">';
                $value = $context->find('str');
                $buffer .= $this->sectionAbad3ca8a99064d47812b014baa9a7e5($context, $indent, $value);
                $buffer .= '</a></p>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa16ab9298c7b6ebc84b7332872bce10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sendpaymentbutton, enrol_fee ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sendpaymentbutton, enrol_fee ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb5288a974c63be225026ddca9f49851(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'core_payment/gateways_modal\'], function(modal) {
        modal.init();
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'core_payment/gateways_modal\'], function(modal) {
';
                $buffer .= $indent . '        modal.init();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
