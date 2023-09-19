<?php

class __Mustache_9108674bb0503c86472f133831963e57 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('footersmall');
        $buffer .= $this->section3b0da28748b850ebe08ead54b989f4d4($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('footersmall');
        if (empty($value)) {
            
            $buffer .= $indent . '<footer id="page-footer" class="footer-popover footer-dark bg-dark text-light">
';
            $value = $context->find('footerblock');
            $buffer .= $this->section7a3af93193338c20728f9294c0d20834($context, $indent, $value);
            $buffer .= $indent . '</footer>
';
            $buffer .= $indent . '<!--E.O.Footer-->
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section8397d600017f65f298d8425ee0497b7d($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section44cca7cb7eae6e808ea785e5453e43c0($context, $indent, $value);
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section639d4c9d4e74d314e1ce77c5b0a43a42(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <p>{{{copyright_footer}}}</p>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <p>';
                $value = $this->resolveValue($context->find('copyright_footer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b0da28748b850ebe08ead54b989f4d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<footer id="page-footer" class=" footer-popover footer-dark bg-dark text-light">
    <div id="footer">
        <div class="footer-bottom">
            {{# copyright_footer}}
                <p>{{{copyright_footer}}}</p>
            {{/ copyright_footer}}
        </div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<footer id="page-footer" class=" footer-popover footer-dark bg-dark text-light">
';
                $buffer .= $indent . '    <div id="footer">
';
                $buffer .= $indent . '        <div class="footer-bottom">
';
                $value = $context->find('copyright_footer');
                $buffer .= $this->section639d4c9d4e74d314e1ce77c5b0a43a42($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f3e5911176facbf0c9e546d4014f560(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="footer-logo">
                                        <a href="#"><img src="{{logourl}}" width="100" height="100" alt="Academi"></a>
                                    </div>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="footer-logo">
';
                $buffer .= $indent . '                                        <a href="#"><img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" width="100" height="100" alt="Academi"></a>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3b35ceebb1671c91c0b74abb137b8be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{#logourl}}
                                    <div class="footer-logo">
                                        <a href="#"><img src="{{logourl}}" width="100" height="100" alt="Academi"></a>
                                    </div>
                                    {{/logourl}}
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('logourl');
                $buffer .= $this->section8f3e5911176facbf0c9e546d4014f560($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2cb244711d3e840387238dcae747cefe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' info, theme_academi ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' info, theme_academi ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f8d1f98a411484b08b897d0a6fd5d91(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <h2>{{#str}} info, theme_academi {{/str}}</h2>
                                    <ul>
                                        {{{infolink}}}
                                    </ul>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <h2>';
                $value = $context->find('str');
                $buffer .= $this->section2cb244711d3e840387238dcae747cefe($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '                                    <ul>
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('infolink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2fc6ec852714100dca2a532ed1856a8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contact_us, theme_academi ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' contact_us, theme_academi ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2dc230eaa5f231a2c48da121e346b77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{address}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('address'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb93df5c98e02d308f427ba82f330d52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <p><i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}</p>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <p><i class="fa fa-phone-square"></i> ';
                $value = $this->resolveValue($context->find('phone'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' : ';
                $value = $this->resolveValue($context->find('phoneno'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC04f8543de2bdd65167bdb05b40fd858(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <p><i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a></p>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <p><i class="fa fa-envelope"></i> ';
                $value = $this->resolveValue($context->find('email'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' : <a class="mail-link" href="mailto:';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('emailid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17c958727c5fb370ebde1565e4c8e132(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' followus, theme_academi ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' followus, theme_academi ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36a5a63cb40f59a5a6d424bb299e90f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <li class="smedia-01"><a href="{{fburl}}"><i class="fa fa-facebook-square"></i></a></li>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <li class="smedia-01"><a href="';
                $value = $this->resolveValue($context->find('fburl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i class="fa fa-facebook-square"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85ab3818c238ea5a5f34e831ba28ac32(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <li class="smedia-02"><a href="{{pinurl}}"><i class="fa fa-pinterest-square"></i></a></li>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <li class="smedia-02"><a href="';
                $value = $this->resolveValue($context->find('pinurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i class="fa fa-pinterest-square"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1afde8eda8304b239e4726cd913fa228(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <li class="smedia-03"><a href="{{twurl}}"><i class="fa fa-twitter-square"></i></a></li>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <li class="smedia-03"><a href="';
                $value = $this->resolveValue($context->find('twurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i class="fa fa-twitter-square"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC88c088082467f92cda26eaebade77dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <li class="smedia-04"><a href="{{gpurl}}"><i class="fa fa-google-plus-square"></i></a></li>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <li class="smedia-04"><a href="';
                $value = $this->resolveValue($context->find('gpurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><i class="fa fa-google-plus-square"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b6a5dc0c5d9e635e502bfc6e2b3ff1f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="social-media">
                                        <h6>{{#str}} followus, theme_academi {{/str}}</h6>
                                        <ul>
                                        {{# fburl}}
                                            <li class="smedia-01"><a href="{{fburl}}"><i class="fa fa-facebook-square"></i></a></li>
                                        {{/ fburl}}
                                        {{# pinurl}}
                                        <li class="smedia-02"><a href="{{pinurl}}"><i class="fa fa-pinterest-square"></i></a></li>
                                        {{/ pinurl}}
                                        {{# twurl}}
                                            <li class="smedia-03"><a href="{{twurl}}"><i class="fa fa-twitter-square"></i></a></li>
                                        {{/ twurl}}
                                        {{# gpurl}}
                                            <li class="smedia-04"><a href="{{gpurl}}"><i class="fa fa-google-plus-square"></i></a></li>
                                        {{/ gpurl}}
                                        </ul>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="social-media">
';
                $buffer .= $indent . '                                        <h6>';
                $value = $context->find('str');
                $buffer .= $this->section17c958727c5fb370ebde1565e4c8e132($context, $indent, $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '                                        <ul>
';
                $value = $context->find('fburl');
                $buffer .= $this->section36a5a63cb40f59a5a6d424bb299e90f7($context, $indent, $value);
                $value = $context->find('pinurl');
                $buffer .= $this->section85ab3818c238ea5a5f34e831ba28ac32($context, $indent, $value);
                $value = $context->find('twurl');
                $buffer .= $this->section1afde8eda8304b239e4726cd913fa228($context, $indent, $value);
                $value = $context->find('gpurl');
                $buffer .= $this->sectionC88c088082467f92cda26eaebade77dd($context, $indent, $value);
                $buffer .= $indent . '                                        </ul>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE095474f473448ce118c7bccd2f1d2d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="col-md-4">
                                <div class="contact-info">
                                    <h2 class="nopadding">{{#str}} contact_us, theme_academi {{/str}}</h2>
                                    <p>{{# address}}{{address}}{{/ address}}</p>
                                    {{# phoneno}}
                                    <p><i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}</p>
                                    {{/ phoneno}}
                                    {{# emailid}}
                                    <p><i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a></p>
                                    {{/ emailid}}
                                </div>

                                {{# socialurl}}
                                    <div class="social-media">
                                        <h6>{{#str}} followus, theme_academi {{/str}}</h6>
                                        <ul>
                                        {{# fburl}}
                                            <li class="smedia-01"><a href="{{fburl}}"><i class="fa fa-facebook-square"></i></a></li>
                                        {{/ fburl}}
                                        {{# pinurl}}
                                        <li class="smedia-02"><a href="{{pinurl}}"><i class="fa fa-pinterest-square"></i></a></li>
                                        {{/ pinurl}}
                                        {{# twurl}}
                                            <li class="smedia-03"><a href="{{twurl}}"><i class="fa fa-twitter-square"></i></a></li>
                                        {{/ twurl}}
                                        {{# gpurl}}
                                            <li class="smedia-04"><a href="{{gpurl}}"><i class="fa fa-google-plus-square"></i></a></li>
                                        {{/ gpurl}}
                                        </ul>
                                    </div>
                                {{/ socialurl}}
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="col-md-4">
';
                $buffer .= $indent . '                                <div class="contact-info">
';
                $buffer .= $indent . '                                    <h2 class="nopadding">';
                $value = $context->find('str');
                $buffer .= $this->section2fc6ec852714100dca2a532ed1856a8f($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '                                    <p>';
                $value = $context->find('address');
                $buffer .= $this->sectionB2dc230eaa5f231a2c48da121e346b77($context, $indent, $value);
                $buffer .= '</p>
';
                $value = $context->find('phoneno');
                $buffer .= $this->sectionDb93df5c98e02d308f427ba82f330d52($context, $indent, $value);
                $value = $context->find('emailid');
                $buffer .= $this->sectionC04f8543de2bdd65167bdb05b40fd858($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '
';
                $value = $context->find('socialurl');
                $buffer .= $this->section8b6a5dc0c5d9e635e502bfc6e2b3ff1f($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD38e1bbc225198f11fd70de7570a1eed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <p>{{{copyright_footer}}}</p>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <p>';
                $value = $this->resolveValue($context->find('copyright_footer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a5198f26dc6ad191d1a18c314235d65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showfooter, theme_boost';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showfooter, theme_boost';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46f926dcc61094038ebb3542556c1993(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'e/question, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'e/question, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02ed278fb880b463f0eaffbff2b85bfe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div>{{{ output.page_doc_link }}}</div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div>';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDde70124b66601d3380b3d256b313a69(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div>{{{ output.services_support_link }}}</div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div>';
                $value = $this->resolveValue($context->findDot('output.services_support_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA9e0e52407597205021e26c2effc17a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div>{{{ output.supportemail }}}</div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div>';
                $value = $this->resolveValue($context->findDot('output.supportemail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA043d0990d3881b1c0f4fdd51aa140ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-section p-3 border-bottom">
                    {{# output.page_doc_link }}
                        <div>{{{ output.page_doc_link }}}</div>
                    {{/ output.page_doc_link }}

                    {{# output.services_support_link }}
                        <div>{{{ output.services_support_link }}}</div>
                    {{/ output.services_support_link }}

                    {{# output.supportemail }}
                        <div>{{{ output.supportemail }}}</div>
                    {{/ output.supportemail }}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="footer-section p-3 border-bottom">
';
                $value = $context->findDot('output.page_doc_link');
                $buffer .= $this->section02ed278fb880b463f0eaffbff2b85bfe($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.services_support_link');
                $buffer .= $this->sectionDde70124b66601d3380b3d256b313a69($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.supportemail');
                $buffer .= $this->sectionA9e0e52407597205021e26c2effc17a8($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cef0c729bd31199c0f96ce94b38f287(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'poweredbymoodle, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'poweredbymoodle, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbadd554e70ec7af082056d50928f237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'version, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'version, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB49b84bde94828f292e94a93fac2af1a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div>
                        {{#str}}version, core{{/str}} {{{ output.moodle_release }}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div>
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->sectionEbadd554e70ec7af082056d50928f237($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->findDot('output.moodle_release'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7a3af93193338c20728f9294c0d20834(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="footer">
        <div class="footer-main">
            <div class="container-fluid">
                <div id="course-footer">{{{ output.course_footer }}}</div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="infoarea">
                                {{#footlogo}}
                                    {{#logourl}}
                                    <div class="footer-logo">
                                        <a href="#"><img src="{{logourl}}" width="100" height="100" alt="Academi"></a>
                                    </div>
                                    {{/logourl}}
                                {{/footlogo}}
                                {{{footnote}}}
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="foot-links">
                                {{# infolink}}
                                    <h2>{{#str}} info, theme_academi {{/str}}</h2>
                                    <ul>
                                        {{{infolink}}}
                                    </ul>
                                {{/ infolink}}
                            </div>
                        </div>

                        {{#block3}}
                            <div class="col-md-4">
                                <div class="contact-info">
                                    <h2 class="nopadding">{{#str}} contact_us, theme_academi {{/str}}</h2>
                                    <p>{{# address}}{{address}}{{/ address}}</p>
                                    {{# phoneno}}
                                    <p><i class="fa fa-phone-square"></i> {{phone}} : {{phoneno}}</p>
                                    {{/ phoneno}}
                                    {{# emailid}}
                                    <p><i class="fa fa-envelope"></i> {{email}} : <a class="mail-link" href="mailto:{{emailid}}">{{emailid}}</a></p>
                                    {{/ emailid}}
                                </div>

                                {{# socialurl}}
                                    <div class="social-media">
                                        <h6>{{#str}} followus, theme_academi {{/str}}</h6>
                                        <ul>
                                        {{# fburl}}
                                            <li class="smedia-01"><a href="{{fburl}}"><i class="fa fa-facebook-square"></i></a></li>
                                        {{/ fburl}}
                                        {{# pinurl}}
                                        <li class="smedia-02"><a href="{{pinurl}}"><i class="fa fa-pinterest-square"></i></a></li>
                                        {{/ pinurl}}
                                        {{# twurl}}
                                            <li class="smedia-03"><a href="{{twurl}}"><i class="fa fa-twitter-square"></i></a></li>
                                        {{/ twurl}}
                                        {{# gpurl}}
                                            <li class="smedia-04"><a href="{{gpurl}}"><i class="fa fa-google-plus-square"></i></a></li>
                                        {{/ gpurl}}
                                        </ul>
                                    </div>
                                {{/ socialurl}}
                            </div>
                        {{/block3}}
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                {{# copyright_footer}}
                    <p>{{{copyright_footer}}}</p>
                {{/ copyright_footer}}

                {{! Moodle footer debug footer }}
                <div class="footer-content-debugging">
                    <div class="container">{{{ output.debug_footer_html }}}</div>
                </div>
            </div>

            {{! Moodle footer help icon popover }}
            <div data-region="footer-container-popover">
                <button class="btn btn-icon bg-secondary icon-no-margin btn-footer-popover" data-action="footer-popover" aria-label="{{#str}}showfooter, theme_boost{{/str}}">
                    {{#pix}}e/question, core{{/pix}}
                </button>
            </div>
    
            <div class="footer-content-popover container" data-region="footer-content-popover">
            {{# output.has_popover_links }}
                <div class="footer-section p-3 border-bottom">
                    {{# output.page_doc_link }}
                        <div>{{{ output.page_doc_link }}}</div>
                    {{/ output.page_doc_link }}

                    {{# output.services_support_link }}
                        <div>{{{ output.services_support_link }}}</div>
                    {{/ output.services_support_link }}

                    {{# output.supportemail }}
                        <div>{{{ output.supportemail }}}</div>
                    {{/ output.supportemail }}
                </div>
            {{/ output.has_popover_links }}
        
            <div class="footer-section p-3 border-bottom">
                <div class="logininfo">
                    {{{ output.login_info }}}
                </div>
                <div class="tool_usertours-resettourcontainer">
                </div>
                {{{ output.standard_footer_html }}}
                {{{ output.standard_end_of_body_html }}}
            </div>

            <div class="footer-section p-3">
                <div>{{#str}}poweredbymoodle, core{{/str}}</div>
                {{#output.moodle_release}}
                    <div>
                        {{#str}}version, core{{/str}} {{{ output.moodle_release }}}
                    </div>
                {{/output.moodle_release}}
            </div>
        </div>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="footer">
';
                $buffer .= $indent . '        <div class="footer-main">
';
                $buffer .= $indent . '            <div class="container-fluid">
';
                $buffer .= $indent . '                <div id="course-footer">';
                $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                    <div class="row">
';
                $buffer .= $indent . '                        <div class="col-md-5">
';
                $buffer .= $indent . '                            <div class="infoarea">
';
                $value = $context->find('footlogo');
                $buffer .= $this->sectionF3b35ceebb1671c91c0b74abb137b8be($context, $indent, $value);
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('footnote'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                        <div class="col-md-3">
';
                $buffer .= $indent . '                            <div class="foot-links">
';
                $value = $context->find('infolink');
                $buffer .= $this->section6f8d1f98a411484b08b897d0a6fd5d91($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '
';
                $value = $context->find('block3');
                $buffer .= $this->sectionE095474f473448ce118c7bccd2f1d2d7($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="footer-bottom">
';
                $value = $context->find('copyright_footer');
                $buffer .= $this->sectionD38e1bbc225198f11fd70de7570a1eed($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="footer-content-debugging">
';
                $buffer .= $indent . '                    <div class="container">';
                $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div data-region="footer-container-popover">
';
                $buffer .= $indent . '                <button class="btn btn-icon bg-secondary icon-no-margin btn-footer-popover" data-action="footer-popover" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section5a5198f26dc6ad191d1a18c314235d65($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('pix');
                $buffer .= $this->section46f926dcc61094038ebb3542556c1993($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '    
';
                $buffer .= $indent . '            <div class="footer-content-popover container" data-region="footer-content-popover">
';
                $value = $context->findDot('output.has_popover_links');
                $buffer .= $this->sectionA043d0990d3881b1c0f4fdd51aa140ce($context, $indent, $value);
                $buffer .= $indent . '        
';
                $buffer .= $indent . '            <div class="footer-section p-3 border-bottom">
';
                $buffer .= $indent . '                <div class="logininfo">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('output.login_info'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="tool_usertours-resettourcontainer">
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="footer-section p-3">
';
                $buffer .= $indent . '                <div>';
                $value = $context->find('str');
                $buffer .= $this->section3cef0c729bd31199c0f96ce94b38f287($context, $indent, $value);
                $buffer .= '</div>
';
                $value = $context->findDot('output.moodle_release');
                $buffer .= $this->sectionB49b84bde94828f292e94a93fac2af1a($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8397d600017f65f298d8425ee0497b7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.util.js_pending(\'theme_boost/loader\');
require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
    Drawer.init();
    M.util.js_complete(\'theme_boost/loader\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . 'require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
';
                $buffer .= $indent . '    Drawer.init();
';
                $buffer .= $indent . '    M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44cca7cb7eae6e808ea785e5453e43c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/footer-popover\'], function(FooterPopover) {
    FooterPopover.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_boost/footer-popover\'], function(FooterPopover) {
';
                $buffer .= $indent . '    FooterPopover.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
