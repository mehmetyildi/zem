@component('cms.components.content-listing-without-sort')

	@slot('pageUrl') 
		{{ $pageUrl }} 
	@endslot

	@slot('pageName') 
		{{ $pageName }} 
	@endslot

	@slot('pageItem') 
		{{ $pageItem }} 
	@endslot

	@slot('tHead')
		<th>Adı</th>
		<th>İkon</th>
		<th>Oluşturan</th>
        <th>İşlem</th>
	@endslot

	@slot('tBody') 
		@foreach($records as $record)
            <tr>
                <td>{{ $record->title_tr }}</td>
				<td><a href="{{ asset('storage/'.$record->icon) }}" data-gallery><img src="{{ asset('storage/'.$record->icon) }}" width="30"></a></td>
                <td>{{ $record->createdby->name .' @ '. $record->created_at->format('d/m/Y') }}</td>
                @include('cms.includes.content-table-actions', ['record' => $record, 'pageUrl' => $pageUrl])
            </tr>
        @endforeach
	@endslot

	@slot('contentScripts')

	@endslot

@endcomponent