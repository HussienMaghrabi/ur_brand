@extends('admin.layout.forms.edit.index')
@section('action' , "cities/$item->id")
@section('title' , trans('language.edit'))
@section('page-title',trans('language.edit'))
@section('form-groups')
    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.name_ar'),'name'=>'name_ar', 'placeholder'=>trans('language.name_ar')])
    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.name_en'),'name'=>'name_en', 'placeholder'=>trans('language.name_en')])
    @includeIf('admin.components.form.edit.select', ['label' => trans("language.country"),'name'=>'country_id', 'items'=> \App\Country::all() , 'icon' => 'fa fa-list',])
@endsection
@section('submit-button-title' , "Edit User")
