<form wire:submit="submit">
    <label for="title">Titolo</label>
    <input type="text" wire:model="title">

    <label for="content">Testo</label>
    <input type="text" wire:model="content">

    <label for="vote">Voto</label>
    <input type="number" wire:model="vote" min="1" max="5">
    
    <button>Salva</button>
</form>