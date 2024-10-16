<?php

use Example\Example;

describe('Example', function () {
    beforeEach(function () {
        $this->example = new Example();
    });
    
    it('works as expected', function () {
        $this->example->optional('foo');
        expect($this->example->getValue())->toBe('foo');
    });
    
    it('works as expected with Higher Order Testing')
        ->expect(fn() => $this->example->optional('foo'))
        ->getValue()->toBe('foo')
        ->isRequired()->toBeFalse();
    
    it('does not work')
        ->expect(fn() => $this->example->optional('foo'))
        ->isRequired()->toBeFalse()
        ->getValue()->toBe('foo');
});
