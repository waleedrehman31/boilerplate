<?php

namespace Sebastienheyd\Boilerplate\Tests\Components;

class DatepickerTest extends TestComponent
{
    public function testDatepickerNoArgs()
    {
        $expected = <<<'HTML'
<code>&lt;x-boilerplate::datetimepicker> The name attribute has not been set</code>
HTML;

        if ($this->isLaravelEqualOrGreaterThan7) {
            $view = $this->blade('<x-boilerplate::datetimepicker />');
            $this->assertEquals($expected, $view);
        }

        $view = $this->blade("@component('boilerplate::datetimepicker') @endcomponent");
        $this->assertEquals($expected, $view);
    }

    public function testDatepickerName()
    {
        $expected = <<<'HTML'
<div class="form-group">
    <div class="input-group" id="test" data-target-input="nearest">
        <input data-toggle="datetimepicker" data-target="#test" class="form-control datetimepicker-input" name="test_local" type="text">
    </div>
    <input name="test" type="hidden">
</div>
HTML;
        if ($this->isLaravelEqualOrGreaterThan7) {
            $view = $this->blade('<x-boilerplate::datetimepicker id="test" name="test" />');
            $this->assertEquals($expected, $view);
        }

        $view = $this->blade("@component('boilerplate::datetimepicker', ['id' => 'test', 'name' => 'test']) @endcomponent");
        $this->assertEquals($expected, $view);
    }

    public function testDatepickerLabel()
    {
        $expected = <<<'HTML'
<div class="form-group">
    <label for="test_localized">Test</label>
    <div class="input-group" id="test" data-target-input="nearest">
        <input data-toggle="datetimepicker" data-target="#test" class="form-control datetimepicker-input" name="test_local" type="text">
    </div>
    <input name="test" type="hidden">
</div>
HTML;
        if ($this->isLaravelEqualOrGreaterThan7) {
            $view = $this->blade('<x-boilerplate::datetimepicker id="test" name="test" label="Test" />');
            $this->assertEquals($expected, $view);
        }

        $view = $this->blade("@component('boilerplate::datetimepicker', ['id' => 'test', 'name' => 'test', 'label' => 'Test']) @endcomponent");
        $this->assertEquals($expected, $view);
    }

    public function testDatepickerClass()
    {
        $expected = <<<'HTML'
<div class="form-group">
    <div class="input-group" id="test" data-target-input="nearest">
        <input data-toggle="datetimepicker" data-target="#test" class="form-control datetimepicker-input test-class" name="test_local" type="text">
    </div>
    <input name="test" type="hidden">
</div>
HTML;
        if ($this->isLaravelEqualOrGreaterThan7) {
            $view = $this->blade('<x-boilerplate::datetimepicker id="test" name="test" class="test-class" />');
            $this->assertEquals($expected, $view);
        }

        $view = $this->blade("@component('boilerplate::datetimepicker', ['id' => 'test', 'name' => 'test', 'class' => 'test-class']) @endcomponent");
        $this->assertEquals($expected, $view);
    }

    public function testDatepickerHelp()
    {
        $expected = <<<'HTML'
<div class="form-group">
    <div class="input-group" id="test" data-target-input="nearest">
        <input data-toggle="datetimepicker" data-target="#test" class="form-control datetimepicker-input" name="test_local" type="text">
    </div>
    <small class="form-text text-muted">The user will receive an invitation by e-mail to login in which it will allow him to enter his new password</small>
    <input name="test" type="hidden">
</div>
HTML;
        if ($this->isLaravelEqualOrGreaterThan7) {
            $view = $this->blade('<x-boilerplate::datetimepicker id="test" name="test" help="boilerplate::users.create.help" />');
            $this->assertEquals($expected, $view);
        }

        $view = $this->blade("@component('boilerplate::datetimepicker', ['id' => 'test', 'name' => 'test', 'help' => 'boilerplate::users.create.help']) @endcomponent");
        $this->assertEquals($expected, $view);
    }

    public function testDatepickerError()
    {
        $expected = <<<'HTML'
<div class="form-group">
    <div class="input-group" id="test" data-target-input="nearest">
        <input data-toggle="datetimepicker" data-target="#test" class="form-control datetimepicker-input is-invalid" name="fielderror_local" type="text">
    </div>
    <div class="error-bubble"><div>Error message</div></div>
    <input name="fielderror" type="hidden">
</div>
HTML;
        if ($this->isLaravelEqualOrGreaterThan7) {
            $view = $this->blade('<x-boilerplate::datetimepicker id="test" name="fielderror" />');
            $this->assertEquals($expected, $view);
        }

        $view = $this->blade("@component('boilerplate::datetimepicker', ['id' => 'test', 'name' => 'fielderror']) @endcomponent");
        $this->assertEquals($expected, $view);
    }

    public function testDatepickerPrependAppendText()
    {
        $expected = <<<'HTML'
<div class="form-group">
    <div class="input-group" id="test" data-target-input="nearest">
        <div class="input-group-prepend" data-toggle="datetimepicker" data-target="#test">
            <span class="input-group-text">test</span>
        </div>
        <input data-toggle="datetimepicker" data-target="#test" class="form-control datetimepicker-input" name="test_local" type="text">
        <div class="input-group-append" data-toggle="datetimepicker" data-target="#test">
            <span class="input-group-text">test</span>
        </div>
    </div>
    <input name="test" type="hidden">
</div>
HTML;
        if ($this->isLaravelEqualOrGreaterThan7) {
            $view = $this->blade('<x-boilerplate::datetimepicker id="test" name="test" prepend-text="test" append-text="test" />');
            $this->assertEquals($expected, $view);
        }

        $view = $this->blade("@component('boilerplate::datetimepicker', ['id' => 'test', 'name' => 'test', 'prepend-text' => 'test', 'append-text' => 'test']) @endcomponent");
        $this->assertEquals($expected, $view);
    }

    public function testDatepickerPrependAppendIcon()
    {
        $expected = <<<'HTML'
<div class="form-group">
    <div class="input-group" id="test" data-target-input="nearest">
        <div class="input-group-prepend" data-toggle="datetimepicker" data-target="#test">
            <span class="input-group-text"><span class="fas fa-calendar"></span></span>
        </div>
        <input data-toggle="datetimepicker" data-target="#test" class="form-control datetimepicker-input" name="test_local" type="text">
        <div class="input-group-append" data-toggle="datetimepicker" data-target="#test">
            <span class="input-group-text"><span class="fas fa-calendar"></span></span>
        </div>
    </div>
    <input name="test" type="hidden">
</div>
HTML;
        if ($this->isLaravelEqualOrGreaterThan7) {
            $view = $this->blade('<x-boilerplate::datetimepicker id="test" name="test" prepend-text="fas fa-calendar" append-text="fas fa-calendar" />');
            $this->assertEquals($expected, $view);
        }

        $view = $this->blade("@component('boilerplate::datetimepicker', ['id' => 'test', 'name' => 'test', 'prepend-text' => 'fas fa-calendar', 'append-text' => 'fas fa-calendar']) @endcomponent");
        $this->assertEquals($expected, $view);
    }

    public function testDatepickerPrependAppend()
    {
        $expected = <<<'HTML'
<div class="form-group">
    <div class="input-group" id="test" data-target-input="nearest">
        <div class="input-group-prepend" data-toggle="datetimepicker" data-target="#test">
            test
        </div>
        <input data-toggle="datetimepicker" data-target="#test" class="form-control datetimepicker-input" name="test_local" type="text">
        <div class="input-group-append" data-toggle="datetimepicker" data-target="#test">
            test
        </div>
    </div>
    <input name="test" type="hidden">
</div>
HTML;
        if ($this->isLaravelEqualOrGreaterThan7) {
            $view = $this->blade('<x-boilerplate::datetimepicker id="test" name="test"><x-slot name="prepend">test</x-slot><x-slot name="append">test</x-slot></x-boilerplate::datetimepicker>');
            $this->assertEquals($expected, $view);
        }

        $view = $this->blade("@component('boilerplate::datetimepicker', ['id' => 'test', 'name' => 'test']) @slot('prepend') test @endslot @slot('append') test @endslot @endcomponent");
        $this->assertEquals($expected, $view);
    }

    public function testDatepickerJs()
    {
        $expected = <<<'HTML'
<div class="form-group">
    <div class="input-group" id="test" data-target-input="nearest">
        <input data-toggle="datetimepicker" data-target="#test" class="form-control datetimepicker-input" name="test_local" type="text">
    </div>
    <input name="test" type="hidden">
</div>
    <script src=""></script>
    <script>moment.locale('en');</script>
    <script src=""></script>
    <script>
        $.fn.datetimepicker.Constructor.Default = $.extend({}, $.fn.datetimepicker.Constructor.Default, {
            locale: "en",
            icons: $.extend({}, $.fn.datetimepicker.Constructor.Default.icons, {
                time: 'far fa-clock',
                date: 'far fa-calendar',
                up: 'fas fa-arrow-up',
                down: 'fas fa-arrow-down',
                previous: 'fas fa-chevron-left',
                next: 'fas fa-chevron-right',
                today: 'far fa-calendar-check',
                clear: 'fas fa-trash',
                close: 'fas fa-times'
            })
        });
    </script>
    <script>
        $('#test').datetimepicker({
            format: "L",
            buttons: {
                showToday: false,
                showClear: false,
                showClose: false
            },
            useCurrent: false,
        });

        $('#test').on('change.datetimepicker', () => {
            $('input[name="test"]').val('');
            if ($('input[name="test_local"]').val() !== '') {
                let date = $('#test').datetimepicker('viewDate').format('YYYY-MM-DD');
                $('input[name="test"]').val(date);
            }
        })
    </script>
HTML;
        if ($this->isLaravelEqualOrGreaterThan7) {
            $view = $this->blade('<x-boilerplate::datetimepicker id="test" name="test" />@stack("js")');
            $this->assertEquals($expected, $view);
        }

        $view = $this->blade("@component('boilerplate::datetimepicker', ['id' => 'test', 'name' => 'test']) @endcomponent()@stack('js')");
        $this->assertEquals($expected, $view);
    }
}
