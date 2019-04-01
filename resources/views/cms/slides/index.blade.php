@component('cms.components.content-listing')

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
		<th>Pozisyon</th>
		<th>Görsel</th>
		<th>Adı</th>
		<th>Oluşturan</th>
		<th>Yayında</th>
        <th>İşlem</th>
	@endslot

	@slot('tBody') 
		@foreach($records as $record)
            <tr>
				<td class="actionsColumn">{{ $record->position }}</td>
				<td><a href="{{ asset('storage/'.$record->main_image) }}" data-gallery><img src="{{ asset('storage/'.$record->main_image) }}" width="50"></a></td>
                <td>{{ $record->title_tr }}</td>
                <td>{{ $record->createdby->name .' @ '. $record->created_at->format('d/m/Y') }}</td>
				<td class="actionsColumn">{{ $record->publish ? 'Evet' : 'Hayır' }}</td>
                @include('cms.includes.content-table-actions', ['record' => $record, 'pageUrl' => $pageUrl])
            </tr>
        @endforeach
	@endslot

	@slot('contentScripts')

	@endslot

@endcomponent