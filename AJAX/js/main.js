class LinkedSelect{

    // HTMLSelectElement -> $select
    constructor($select) {
        this.$select = $select
        this.$select.addEventListener('change', this.onChange)
    }
    /** se déclenche au changement de valeur d'un select */
    Onchange(e) {
        //on recupere les données en Ajax
        let request = new XMLHttpRequest()
        request.open('GET', this.$select.dataset.source.replace('$id', e.target.value), true)
        request.onload = () => {
            this
        }
        request.onerror = function () {
            alert('Impossible de charger la liste')
        }
        request.send()
        // On injecte les données dans le prochain select
    }
}


let $selects = document.querySelectorAll('.linked-select');
$selects.forEach(function ($select) {
    new LinkedSelect($select)
})