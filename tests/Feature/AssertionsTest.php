<?php

it('will detect a child component with the livewire path', function() {

    \Pest\Livewire\livewire(\App\Livewire\ParentComponent::class)
        ->assertContainsLivewireComponent('children.child-component');

});

it('will detect a child component with the class', function () {

    \Pest\Livewire\livewire(\App\Livewire\ParentComponent::class)
        ->assertContainsLivewireComponent(\App\Livewire\Children\ChildComponent::class);
});
