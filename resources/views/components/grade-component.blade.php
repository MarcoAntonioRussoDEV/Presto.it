<div>
    @for ($i = 0; $i < $grade; $i++)
        <span class="fa-solid fa-star text-warning"></span>
    @endfor
    
    @for ($i = $grade; $i < 5; $i++)
        <span class="fa-regular fa-star text-warning"></span>
    @endfor
</div>