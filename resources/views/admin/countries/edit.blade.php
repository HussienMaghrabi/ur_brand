@extends('admin.layout.forms.edit.index')
@section('action' , "countries/$item->id")
@section('title' , trans('admin.edit'))
@section('page-title',trans('admin.edit'))
@section('form-groups')
    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('admin.name_ar'),'name'=>'name_ar', 'placeholder'=>trans('admin.name_ar')])
    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('admin.name_en'),'name'=>'name_en', 'placeholder'=>trans('admin.name_en')])
@endsection
@section('submit-button-title' , "Edit Country")
