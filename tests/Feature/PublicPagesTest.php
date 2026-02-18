<?php

it('renders the home page with all sections', function () {
    $this->get(route('home'))
        ->assertSuccessful()
        ->assertSee('Diogo Aguiar')
        ->assertSee('About')
        ->assertSee('Approach')
        ->assertSee('Services')
        ->assertSee('Contact');
});

it('shows the value proposition as the headline', function () {
    $this->get(route('home'))
        ->assertSuccessful()
        ->assertSee('Turning Ideas Into Solutions That Drive Results');
});

it('shows about content on the home page', function () {
    $this->get(route('home'))
        ->assertSuccessful()
        ->assertSee('The Short Version');
});

it('shows services on the home page', function () {
    $this->get(route('home'))
        ->assertSuccessful()
        ->assertSee('Discovery & Strategy')
        ->assertSee('Product Development');
});

it('shows contact links on the home page', function () {
    $this->get(route('home'))
        ->assertSuccessful()
        ->assertSee('github.com/diogoaguiar');
});

it('redirects old about route to homepage anchor', function () {
    $this->get('/about')
        ->assertRedirect('/#about');
});

it('redirects old services route to homepage anchor', function () {
    $this->get('/services')
        ->assertRedirect('/#services');
});

it('redirects old contact route to homepage anchor', function () {
    $this->get('/contact')
        ->assertRedirect('/#contact');
});

it('has navigation with section anchors', function () {
    $this->get(route('home'))
        ->assertSuccessful()
        ->assertSee('#about')
        ->assertSee('#approach')
        ->assertSee('#services')
        ->assertSee('#contact');
});

it('has footer with copyright', function () {
    $this->get(route('home'))
        ->assertSuccessful()
        ->assertSee('Diogo Aguiar');
});
