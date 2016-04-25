@if (isset($item))
    {!! Form::model($item, ['method' => 'PUT', 'route' => ['mconsole.gallery.update', $item->id]]) !!}
@else
    {!! Form::open(['method' => 'POST', 'url' => '/mconsole/gallery']) !!}
@endif
<div class="row">
	<div class="col-lg-7 col-md-6">
        <div class="portlet light">
            @include('mconsole::partials.portlet-title', [
                'title' => trans('mconsole::gallery.form.main'),
                'back' => true,
                'fullscreen' => true,
            ])
            <div class="portlet-body form">
                
                @if (isset($item))
                    @include('mconsole::partials.note', [
                        'back' => '/mconsole/gallery',
                        'title' => trans('mconsole::gallery.info.title'),
                        'text' => trans('mconsole::gallery.info.text'),
                    ])
                @endif
                
    			<div class="form-body">
    				@include('mconsole::forms.text', [
    					'label' => trans('mconsole::gallery.form.slug'),
    					'name' => 'slug',
    				])
    				@include('mconsole::forms.text', [
    					'label' => trans('mconsole::gallery.form.title'),
    					'name' => 'title',
    				])
    				@include('mconsole::forms.textarea', [
    					'label' => trans('mconsole::gallery.form.description'),
    					'name' => 'description',
    				])
    			</div>
                <div class="form-actions">
                    @include('mconsole::forms.submit')
                </div>
            </div>
        </div>
	</div>
    <div class="col-lg-5 col-md-6">
        
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-blue sbold uppercase">{{ trans('mconsole::gallery.form.gallery') }}</span>
                </div>
            </div>
            <div class="portlet-body form">
                @include('mconsole::forms.upload', [
                    'type' => MX_UPLOAD_TYPE_IMAGE,
                    'multiple' => true,
                    'group' => 'gallery',
                    'preset' => 'gallery',
                    'selector' => app('API')->options->get('gallery_show_presets'),
                    'id' => isset($item) ? $item->id : null,
                    'model' => 'Milax\Mconsole\Pages\Models\Gallery',
                ])
            </div>
        </div>
        
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-blue sbold uppercase">{{ trans('mconsole::forms.tags.label') }}</span>
                </div>
            </div>
            <div class="portlet-body form">
                @if (isset($item))
                    @include('mconsole::forms.tags', [
                        'tags' => $item->tags,
                    ])
                @else
                    @include('mconsole::forms.tags')
                @endif
            </div>
        </div>
        
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-blue sbold uppercase">{{ trans('mconsole::gallery.form.additional') }}</span>
                </div>
            </div>
            <div class="portlet-body form">
                @include('mconsole::forms.state')
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}