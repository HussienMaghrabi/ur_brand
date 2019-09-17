@extends('admin.layout.forms.edit.index')
@section('action' , "formulas/$item->id")
@section('title' , trans('language.edit'))
@section('page-title',trans('language.edit'))
@section('form-groups')

    @includeIf('admin.components.form.edit.file', ['icon' => 'fa fa-check','label' => trans('language.image'),'name'=>'image', 'max'=>'2'])

    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.title_ar'),'name'=>'title_ar', 'placeholder'=>trans('language.title_ar')])
    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.title_en'),'name'=>'title_en', 'placeholder'=>trans('language.title_en')])

    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.name_ar'),'name'=>'name_ar', 'placeholder'=>trans('language.name_ar')])
    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.name_en'),'name'=>'name_en', 'placeholder'=>trans('language.name_en')])

    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.description-ar'),'name'=>'description_ar', 'placeholder'=>trans('language.description-ar')])
    @includeIf('admin.components.form.edit.text', ['icon' => 'fa fa-user','label' => trans('language.description-en'),'name'=>'description_en', 'placeholder'=>trans('language.description-en')])


@endsection
@section('submit-button-title' , "Edit User")