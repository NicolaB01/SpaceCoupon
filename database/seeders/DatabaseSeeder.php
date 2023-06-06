<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('uqmDqRYI');

        \DB::table('users')->insert([
            ['nome'=> 'user', 'cognome' => 'user', 'username' => 'useruser', 'password' => $password, 'genere' => 'Donna', 'eta' => 15, 'telefono' => '4444444444', 'email' => 'emma4@example.com', 'livello' => 'user'],
            ['nome'=> 'staff', 'cognome' => 'staff', 'username' => 'staffstaff', 'password' => $password, 'genere' => 'Donna', 'eta' => 35, 'telefono' => '2222222222', 'email' => 'emma3@example.com', 'livello' => 'staff'],
            ['nome'=> 'admin', 'cognome' => 'admin', 'username' => 'adminadmin', 'password' => $password, 'genere' => 'Uomo', 'eta' => 37, 'telefono' => '1111111111', 'email' => 'admin@gmail.com', 'livello' => 'admin'],
            ['nome'=> 'Emma', 'cognome' => 'Johnson', 'username' => 'emmajohnson', 'password' => $password, 'genere' => 'Donna', 'eta' => 28, 'telefono' => '3333333333', 'email' => 'emma1@example.com', 'livello' => 'user'],
            ['nome'=> 'Liam', 'cognome' => 'Smith', 'username' => 'liamsmith', 'password' => $password, 'genere' => 'Uomo', 'eta' => 32, 'telefono' => '6667778881', 'email' => 'liam@example.com', 'livello' => 'user'],
            ['nome'=> 'Olivia', 'cognome' => 'Brown', 'username' => 'oliviabrown', 'password' => $password, 'genere' => 'Donna', 'eta' => 35, 'telefono' => '1110009992', 'email' => 'olivia@example.com', 'livello' => 'user'],
            ['nome'=> 'Noah', 'cognome' => 'Taylor', 'username' => 'noahtaylor', 'password' => $password, 'genere' => 'Uomo', 'eta' => 24, 'telefono' => '333444555', 'email' => 'noah@example.com', 'livello' => 'user'],
            ['nome'=> 'Ava', 'cognome' => 'Anderson', 'username' => 'avaanderson', 'password' => $password, 'genere' => 'Donna', 'eta' => 31, 'telefono' => '7778889990', 'email' => 'ava@example.com', 'livello' => 'user'],
            ['nome'=> 'William', 'cognome' => 'Martinez', 'username' => 'williammartinez', 'password' => $password, 'genere' => 'Uomo', 'eta' => 29, 'telefono' => '2221113334', 'email' => 'william@example.com', 'livello' => 'user'],
            ['nome'=> 'Sophia', 'cognome' => 'Garcia', 'username' => 'sophiagarcia', 'password' => $password, 'genere' => 'Donna', 'eta' => 26, 'telefono' => '5554443332', 'email' => 'sophia@example.com', 'livello' => 'user'],
            ['nome'=> 'Mason', 'cognome' => 'Rodriguez', 'username' => 'masonrodriguez', 'password' => $password, 'genere' => 'Uomo', 'eta' => 27, 'telefono' => '8887776665', 'email' => 'mason@example.com', 'livello' => 'user'],
            ['nome'=> 'Isabella', 'cognome' => 'Lopez', 'username' => 'isabellalopez', 'password' => $password, 'genere' => 'Donna', 'eta' => 30, 'telefono' => '4445556667', 'email' => 'isabella@example.com', 'livello' => 'user'],
            ['nome'=> 'James', 'cognome' => 'Lee', 'username' => 'jameslee', 'password' => $password, 'genere' => 'Uomo', 'eta' => 33, 'telefono' => '9998887776', 'email' => 'james@example.com', 'livello' => 'user'],
            ['nome'=> 'Sophie', 'cognome' => 'Baker', 'username' => 'sophiebaker', 'password' => $password, 'genere' => 'Donna', 'eta' => 26, 'telefono' => '2223334445', 'email' => 'sophie@example.com', 'livello' => 'staff'],
            ['nome'=> 'Henry', 'cognome' => 'Miller', 'username' => 'henrymiller', 'password' => $password, 'genere' => 'Uomo', 'eta' => 32, 'telefono' => '6667778889', 'email' => 'henry@example.com', 'livello' => 'staff'],
            ['nome'=> 'Grace', 'cognome' => 'Cook', 'username' => 'gracecook', 'password' => $password, 'genere' => 'Altro', 'eta' => 35, 'telefono' => '1110009998', 'email' => 'grace@example.com', 'livello' => 'staff'],
            ['nome'=> 'Edward', 'cognome' => 'Taylor', 'username' => 'edwardtaylor', 'password' => $password, 'genere' => 'Uomo', 'eta' => 24, 'telefono' => '3334445556', 'email' => 'edward@example.com', 'livello' => 'staff'],
            ['nome'=> 'Scarlett', 'cognome' => 'Foster', 'username' => 'scarlettfoster', 'password' => $password, 'genere' => 'Donna', 'eta' => 31, 'telefono' => '7778889991', 'email' => 'scarlett@example.com', 'livello' => 'staff'],
        ]);


        \DB::table('companies')->insert([
            ['ragioneSociale' => 'Amazon', 'localizzazione' => 'Italia', 'logo' => 'amazon.png', 'tipologia' => 'Spa', 'descrizione' => 'Amazon è un\'azienda multinazionale di commercio elettronico con sede negli Stati Uniti ma attiva anche in Italia. Amazon offre una vasta selezione di prodotti, tra cui libri, elettronica, abbigliamento, e molto altro. L\'azienda è nota per le sue promozioni, sconti e coupon che permettono ai clienti di risparmiare sugli acquisti. L\'obiettivo di Amazon è fornire un\'esperienza di shopping conveniente e soddisfacente.'],
            ['ragioneSociale' => 'Coop', 'localizzazione' => 'Italia', 'logo' => 'coop.png', 'tipologia' => 'Spa', 'descrizione' => 'Coop è una catena di supermercati italiana con sede a Milano. Coop offre una vasta gamma di prodotti alimentari, articoli per la casa, prodotti per la cura della persona e molto altro. L\'azienda è nota per le sue offerte promozionali, sconti e coupon che permettono ai clienti di risparmiare sugli acquisti. L\'obiettivo di Coop è offrire prodotti di qualità a prezzi convenienti per soddisfare le esigenze quotidiane delle famiglie italiane.'],
            ['ragioneSociale' => 'Conad', 'localizzazione' => 'Italia', 'logo' => 'conad.png', 'tipologia' => 'Spa', 'descrizione' => 'Conad è una cooperativa di supermercati italiana con sede a Bologna. Conad offre una vasta selezione di prodotti alimentari, prodotti per la casa, articoli per la cura della persona e molto altro. L\'azienda è nota per le sue iniziative promozionali, sconti e coupon che permettono ai clienti di risparmiare sugli acquisti. L\'obiettivo di Conad è offrire un\'esperienza di shopping conveniente e di qualità per le famiglie italiane.'],
            ['ragioneSociale' => 'Esselunga', 'localizzazione' => 'Italia', 'logo' => 'esselunga.png', 'tipologia' => 'Spa', 'descrizione' => 'Esselunga è una catena di supermercati italiana con sede a Milano. Esselunga offre una vasta gamma di prodotti alimentari di alta qualità, prodotti per la casa, articoli per la cura della persona e molto altro. L\'azienda è nota per le sue offerte promozionali, sconti e coupon che permettono ai clienti di risparmiare sugli acquisti. L\'obiettivo di Esselunga è offrire prodotti freschi e di qualità, combinando convenienza e attenzione alle esigenze dei clienti.'],
            ['ragioneSociale' => 'MediaWorld', 'localizzazione' => 'Italia', 'logo' => 'mediaworld.png', 'tipologia' => 'Spa', 'descrizione' => 'MediaWorld è una catena di negozi di elettronica italiana con sede a Curno, in provincia di Bergamo. MediaWorld offre una vasta selezione di prodotti elettronici, tra cui televisori, telefoni, computer, elettrodomestici e molto altro. L\'azienda è nota per le sue promozioni, sconti e coupon che permettono ai clienti di ottenere prezzi vantaggiosi. L\'obiettivo di MediaWorld è offrire prodotti di qualità a prezzi competitivi per soddisfare le esigenze tecnologiche dei consumatori italiani.'],
            ['ragioneSociale' => 'OVS', 'localizzazione' => 'Italia', 'logo' => 'ovs.png', 'tipologia' => 'Spa', 'descrizione' => 'OVS è una catena di negozi di abbigliamento italiana con sede a Mestre, in provincia di Venezia. OVS offre una vasta gamma di abbigliamento, accessori, scarpe e prodotti per la casa. L\'azienda è nota per le sue offerte promozionali, sconti e coupon che permettono ai clienti di acquistare moda di qualità a prezzi convenienti. L\'obiettivo di OVS è offrire un\'ampia scelta di stili e tendenze per tutta la famiglia, garantendo qualità e convenienza.'],
            ['ragioneSociale' => 'Unieuro', 'localizzazione' => 'Italia', 'logo' => 'unieuro.png', 'tipologia' => 'Spa', 'descrizione' => 'Unieuro è una catena italiana di negozi di elettronica di consumo con sede a Forlì. Unieuro offre una vasta selezione di prodotti elettronici, tra cui telefoni, computer, elettrodomestici, televisori e molto altro. L\'azienda è nota per le sue promozioni, sconti e coupon che permettono ai clienti di ottenere prezzi vantaggiosi. L\'obiettivo di Unieuro è offrire prodotti di qualità a prezzi competitivi, fornendo ai clienti un\'esperienza di shopping soddisfacente.'],
            ['ragioneSociale' => 'Zalando', 'localizzazione' => 'Italia', 'logo' => 'zalando.png', 'tipologia' => 'Spa', 'descrizione' => 'Zalando è una piattaforma di e-commerce tedesca specializzata nella vendita di moda e abbigliamento online. Zalando offre una vasta gamma di prodotti di moda per uomo, donna e bambino, nonché accessori e calzature. L\'azienda è nota per le sue promozioni, sconti e coupon che permettono ai clienti di acquistare i propri capi preferiti a prezzi convenienti. L\'obiettivo di Zalando è offrire una piattaforma di shopping online completa, conveniente e all\'avanguardia.'],
            ['ragioneSociale' => 'Bennet', 'localizzazione' => 'Italia', 'logo' => 'bennet.png', 'tipologia' => 'Spa', 'descrizione' => 'Bennet è una catena di ipermercati italiana con sede a Montano Lucino, in provincia di Como. Bennet offre una vasta gamma di prodotti alimentari, articoli per la casa, elettronica, abbigliamento e molto altro. L\'azienda è nota per le sue offerte promozionali, sconti e coupon che permettono ai clienti di risparmiare sugli acquisti. L\'obiettivo di Bennet è offrire una shopping experience conveniente e completa per le famiglie italiane.'],
            ['ragioneSociale' => 'Groupon', 'localizzazione' => 'Italia', 'logo' => 'groupon.png', 'tipologia' => 'Spa', 'descrizione' => 'Groupon è una piattaforma di e-commerce che offre offerte e sconti su una vasta gamma di prodotti e servizi. Groupon collabora con numerosi negozi, ristoranti, centri benessere e altre attività in Italia per offrire promozioni speciali ai clienti. Gli utenti possono acquistare coupon e voucher su Groupon per usufruire di sconti significativi su varie esperienze e acquisti. L\'obiettivo di Groupon è offrire ai clienti un modo conveniente per scoprire e provare nuove attività a prezzi vantaggiosi.'],
            ['ragioneSociale' => 'Trenitalia', 'localizzazione' => 'Italia', 'logo' => 'trenitalia.png', 'tipologia' => 'Spa', 'descrizione' => 'Trenitalia è la principale compagnia di trasporto ferroviario in Italia. Trenitalia offre servizi di trasporto su treni regionali, intercity, Frecciarossa e Frecciargento in tutto il paese. L\'azienda è nota per le sue offerte promozionali, sconti e coupon che permettono ai passeggeri di risparmiare sui biglietti ferroviari. Trenitalia offre inoltre programmi di fidelizzazione e sconti speciali per i viaggiatori frequenti. L\'obiettivo di Trenitalia è offrire un servizio ferroviario efficiente, comodo e conveniente per i passeggeri italiani.'],
            ['ragioneSociale' => 'Vodafone', 'localizzazione' => 'Italia', 'logo' => 'vodafone.png', 'tipologia' => 'Spa', 'descrizione' => 'Vodafone è un\'azienda di telecomunicazioni che offre servizi di telefonia mobile e fissa in Italia. Vodafone fornisce piani tariffari, offerte e promozioni per i clienti che desiderano sfruttare al meglio i servizi di telefonia e internet. L\'azienda è nota per le sue offerte esclusive, sconti e coupon che permettono ai clienti di risparmiare sulle tariffe e ottenere vantaggi extra. L\'obiettivo di Vodafone è offrire una connettività affidabile e soluzioni di comunicazione innovative per soddisfare le esigenze dei clienti italiani.'],
            ['ragioneSociale' => 'Somfy', 'localizzazione' => 'Francia', 'logo' => 'somfy.png', 'tipologia' => 'Spa', 'descrizione' => 'Somfy è un gruppo industriale fragrance fondato nel 1969. Storicamente stabilito a Cluses in Alta Savoia, è attivo nell\'ambito dei sistemi di motorizzazione e automatizzazione di accessi a abitazioni, edifici e sistemi di allarme.'],
        ]);
        
        
        \DB::table('promotions')->insert([
            ['oggetto' => 'Echo Dot', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '12', '01'), 'idAzienda' => '1', 'sconto' => 15],
            ['oggetto' => 'Macchina Automatica per caffè in chicchi', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '10', '01'), 'idAzienda' => '1', 'sconto' => 33],
            ['oggetto' => 'Videogioco Nintendo', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '09', '10'), 'idAzienda' => '1', 'sconto' => 7],
            ['oggetto' => 'Bio Fruit Basket', 'modalita' => 'in store', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '11', '15'), 'idAzienda' => '2', 'sconto' => 10],
            ['oggetto' => 'Mele', 'modalita' => 'in store', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '11', '15'), 'idAzienda' => '2', 'sconto' => 15],            
            ['oggetto' => 'Affettati', 'modalita' => 'in store', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '11', '15'), 'idAzienda' => '2', 'sconto' => 10],
            ['oggetto' => 'Petto di pollo', 'modalita' => 'in store', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '11', '15'), 'idAzienda' => '2', 'sconto' => 25],
            ['oggetto' => 'Fresh Pasta Selection', 'modalita' => 'in store', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '10', '20'), 'idAzienda' => '3', 'sconto' => 20],
            ['oggetto' => 'LG 65" 4K Smart TV', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '12', '15'), 'idAzienda' => '5', 'sconto' => 25],
            ['oggetto' => 'Women\'s Winter Jackets', 'modalita' => 'in store', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '11', '25'), 'idAzienda' => '6', 'sconto' => 30],
            ['oggetto' => 'Sony PlayStation 5 Bundle', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '12', '10'), 'idAzienda' => '7', 'sconto' => 20],
            ['oggetto' => 'Men\'s Fall Collection', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '11', '05'), 'idAzienda' => '8', 'sconto' => 15],
            ['oggetto' => 'High-Speed Train Tickets', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '12', '20'), 'idAzienda' => '11', 'sconto' => 10],
            ['oggetto' => 'Grocery Vouchers', 'modalita' => 'in store', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '11', '15'), 'idAzienda' => '9', 'sconto' => 15],
            ['oggetto' => 'Spa and Wellness Packages', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '12', '01'), 'idAzienda' => '10', 'sconto' => 20],
            ['oggetto' => 'SIM Only Plan', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '11', '30'), 'idAzienda' => '12', 'sconto' => 25],
            ['oggetto' => 'Kindle Paperwhite', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2022', '12', '05'), 'idAzienda' => '1', 'sconto' => 30],
            ['oggetto' => 'Organic Food Box', 'modalita' => 'in store', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '11', '10'), 'idAzienda' => '2', 'sconto' => 15],
            ['oggetto' => 'Italian Wine Collection', 'modalita' => 'in store', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '10', '15'), 'idAzienda' => '3', 'sconto' => 25],
            ['oggetto' => 'Birra', 'modalita' => 'in store', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '10', '15'), 'idAzienda' => '3', 'sconto' => 15],            
            ['oggetto' => 'Cancelleria', 'modalita' => 'in store', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '10', '15'), 'idAzienda' => '3', 'sconto' => 30],
            ['oggetto' => 'Set di pentole', 'modalita' => 'in store', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '10', '15'), 'idAzienda' => '3', 'sconto' => 5],
            ['oggetto' => 'Acqua Sant\'Anna', 'modalita' => 'in store', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2022', '10', '15'), 'idAzienda' => '3', 'sconto' => 23],
            ['oggetto' => 'Fresh Fish Selection', 'modalita' => 'in store', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '11', '25'), 'idAzienda' => '4', 'sconto' => 20],
            ['oggetto' => 'Apple MacBook Pro', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '12', '10'), 'idAzienda' => '5', 'sconto' => 15],
            ['oggetto' => 'Men\'s Winter Collection', 'modalita' => 'in store', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '11', '20'), 'idAzienda' => '6', 'sconto' => 30],
            ['oggetto' => 'Sony 65" OLED Smart TV', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '12', '05'), 'idAzienda' => '7', 'sconto' => 25],
            ['oggetto' => 'Women\'s Fall Collection', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '11', '15'), 'idAzienda' => '8', 'sconto' => 20],
            ['oggetto' => 'Regional Train Tickets', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '12', '01'), 'idAzienda' => '11', 'sconto' => 10],
            ['oggetto' => 'Home Appliances Sale', 'modalita' => 'in store', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '11', '10'), 'idAzienda' => '9', 'sconto' => 30],
            ['oggetto' => 'Local Experiences', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '12', '15'), 'idAzienda' => '10', 'sconto' => 15],
            ['oggetto' => 'Family Plan', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2022', '11', '30'), 'idAzienda' => '12', 'sconto' => 20],
            ['oggetto' => 'Sistema di allarme', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '10', '20'), 'idAzienda' => '13', 'sconto' => 10],
            ['oggetto' => 'TaHoma switch', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '11', '30'), 'idAzienda' => '13', 'sconto' => 13],
            ['oggetto' => 'Motori e automazioni per tapparelle', 'modalita' => 'online', 'luogoFruizione' => 'Italia', 'tempoFruizione' => Carbon::create('2023', '11', '30'), 'idAzienda' => '13', 'sconto' => 7],
        ]);

        \DB::table('faqs')->insert([
            ['domanda' => 'Come posso registrarmi?', 'risposta' => 'Per registrarti, clicca sul pulsante di registrazione e completa il modulo con le tue informazioni.'],
            ['domanda' => 'Come attivo il coupon?', 'risposta' => 'Per attivare il coupon, segui le istruzioni fornite sul sito durante il processo di acquisto.'],
            ['domanda' => 'Posso restituire un prodotto acquistato con un coupon?', 'risposta' => 'Le politiche di restituzione dipendono dalle condizioni specifiche dell\'acquisto e delle promozioni. Ti consigliamo di consultare la nostra pagina delle politiche di reso per ulteriori informazioni.'],
        ]);
        
    }
}
