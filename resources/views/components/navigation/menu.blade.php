{{--name of component:
<x-navigation.menu/>
available variables:
$menu['data']
--}}

<div>
    <nav>
        <ul>
            @forelse($menu['data'] as $row_menu)
                @if ($row_menu->name == 'Каталог')
                    <li>
                        <a href="{{$row_menu->slug}}">
                            {{$row_menu->name}}
                        </a>
                        <ul>
                            @forelse($row_menu->head as $row_head)
                                <li>
                                    <a href="javascript:avoid(0);">
                                        {{$row_head->name}}
                                    </a>
                                    <ul>
                                        @forelse($row_head->rubric as $row_rubric)
                                            @if ($row_rubric->head_id == $row_head->id)
                                                <ul>
                                                    <a href="javascript:avoid(0);">
                                                        {{$row_rubric->name}}
                                                    </a>
                                                </ul>
                                            @endif
                                        @empty
                                            Список рубрик Каталогапуст
                                        @endforelse
                                    </ul>
                                </li>
                            @empty
                            Список разделов Каталога пуст
                            @endforelse
                        </ul>
                    </li>
                @elseif ($row_menu->name == 'Услуги')
                    <li>
                        <a href="{{$row_menu->slug}}">
                            {{$row_menu->name}}
                        </a>
                        <ul>
                            @forelse($row_menu->head as $row_head)
                                <li>
                                    <a href="{{$row_head->slug}}">
                                        {{$row_head->name}}
                                    </a>
                                </li>
                            @empty
                                Список услуг пуст
                            @endforelse
                        </ul>
                    </li>
                @elseif ($row_menu->name == 'Блог')
                    <li>
                        <a href="{{$row_menu->slug}}">
                            {{$row_menu->name}}
                        </a>
                        <ul>
                            @forelse($row_menu->head as $row_head)
                                <li>
                                    <a href="javascript:avoid(0);">
                                        {{$row_head->name}}
                                    </a>
                                    <ul>
                                        @forelse($row_head->rubric as $row_rubric)
                                            @if ($row_rubric->head_id == $row_head->id)
                                                <ul>
                                                    <a href="javascript:avoid(0);">
                                                        {{$row_rubric->name}}
                                                    </a>
                                                </ul>
                                            @endif
                                        @empty
                                            Список рубрик Блога пуст
                                        @endforelse
                                    </ul>
                                </li>
                            @empty
                                Список разделов Блога пуст
                            @endforelse
                        </ul>
                    </li>
                @else
                    <li>
                        <a href="{{$row_menu->slug}}">
                            {{$row_menu->name}}
                        </a>
                    </li>
                @endif
            @empty
                Список меню пуст
            @endforelse
        </ul>
    </nav>
</div>
