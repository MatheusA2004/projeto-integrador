const Main = {

    init: function(){
        this.cacheselectors()
        this.bindEvents()
    },

    cacheselectors: function(){
        this.button = document.querySelectorAll('.btn-apagar')
        this.buttonAtender = document.querySelectorAll('.atender')
    },

    bindEvents: function(){
        const self = this

        this.button.forEach((buttons) => {
            buttons.onclick = self.Events.btnApagar_click
        });

        this.buttonAtender.forEach((buttons) => {
            buttons.onclick = self.Events.btnAtendido_click
        });

        
    },

    Events: {
        btnApagar_click: function(e){
            const div = e.target.parentElement.parentElement
            const chamadoContains = div.classList.contains('chamados') 

            if(chamadoContains){
                div.classList.remove('chamados')
                div.classList.add('chamados-ocult')
            } else{
                div.classList.add('chamados-ocult')
            }
        },

        btnAtendido_click: function(e){
            const div = e.target.parentElement.parentElement
            const chamadoContains = div.classList.contains('chamados') 

            if(chamadoContains){
                div.classList.remove('chamados')
                div.classList.add('chamados-atendido')
            } else{
                div.classList.add('chamados-atendido')
            }
        }
    }
}

Main.init()



