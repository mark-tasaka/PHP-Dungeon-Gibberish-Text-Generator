<?php

function getSpecialWord()
{
    $word = array('Bobugbubilz', 'Azi Dahaka', 'Cadixtat', 'Malotoch', 'Nimlurun', 'Daenthar', 'Klazath', 'Aristemis', 'Bravo', 'Thug', 'Beggar', 'Apprentice', 'Murderer', 'Cutpurse', 'Rogue', 'Cutthroat', 'Burglar', 'Capo', 'Executioner', 'Robber', 'Boss', 'Assassin', 'Swindler', 'Squire', 'Bandit', 'Wildling', 'Champion', 'Brigand', 'Barbarian', 'Knight', 'Marauder', 'Berserker', 'Cavalier', 'Ravager', 'Headman', 'Headwoman', 'Paladin', 'Reaver', 'Chieftain', 'Acolyte', 'Zealot', 'Witness', 'Heathen-slayer', 'Convert', 'Pupil', 'Brother', 'Cultist', 'Chronicler', 'Curate', 'Apostle', 'Judge', 'Father', 'High-priest', 'Druid', 'Cultist', 'Evoker', 'Astrologist', 'Shaman', 'Controller', 'Enchanter', 'Diabolist', 'Conjurer', 'Magician', 'Warlock', 'Witch', 'Summoner', 'Thaumaturgist', 'Necromancer', 'Elementalist', 'Sorcerer', 'Agent', 'Rebel', 'Apprentice', 'Broker', 'Dissident', 'Novice', 'Delegate', 'Exile', 'Journeyer', 'Envoy', 'Iconoclast', 'Crafter', 'Syndic', 'Renegade', 'Thegn', 'Wanderer', 'Seer', 'Quester', 'Savant', 'Elder', 'Wanderer', 'Explorer', 'Collector', 'Accumulator', 'Wise-one', 'Sezrekan', 'Abjurer', 'Amazon', 'Apprentice', 'Adept', 'Abbey', 'Archer', 'Arch-rogue', 'Apparitionist', 'Acolyte', 'Armigerent', 'Artisan', 'Archveult', 'Advocate', 'Artillerist', 'Assassin', 'Astrologist', 'Alienist', 'Athlete', 'Balladeer', 'Astrologue', 'Apostle', 'Bandit', 'Bard', 'Augurer', 'Ascetic', 'Barbarian', 'Beggar', 'Baleful', 'Aspirant', 'Battler', 'Bilker', 'Beguiler', 'Astrologue', 'Berserker', 'Body', 'snatcher', 'Bonder', 'Beatific', 'Bludgeoner', 'Boss', 'Capricious', 'Bishop', 'Bodyguard', 'Bounty', 'hunter', 'Chamberlain', 'Blackcoat', 'Brave', 'Bravo', 'Charmer', 'Blackguard', 'Brawler', 'Bully', 'Chronicler', 'Brother', 'Brigand', 'Burglar', 'Clairvoyant', 'Cabalist', 'Bruiser', 'Capo', 'Collector', 'Caller', 'Brute', 'Card', 'shark', 'Conjurer', 'Cardinal', 'Bushwhacker', 'Charlatan', 'Controller', 'Celibate', 'Cadet', 'Cheat', 'Cryomancer', 'Chaplain', 'Campaigner', 'Clockworker', 'Cultist', 'Cleric', 'Captain', 'Con', 'man', 'Curse-giver', 'Conclavist', 'Cavalier', 'Cove', 'Dangerous', 'Confessor', 'Champion', 'Cozener', 'Diabolist', 'Convert(er)', 'Charger', 'Cracksman', 'Diviner', 'Cultist', 'Chevalier', 'Cretin', 'Dreamer', 'Curate', 'Chieftain', 'Crony', 'Elementalist', 'Deacon', 'Colossus', 'Cutpurse', 'Enchanter', 'Dean', 'Conqueror', 'Cutthroat', 'Encylopaedist', 'Deist', 'Darksider', 'Ensorceller', 'Disciple', 'Defender', 'Devil', 'Ensqualmer', 'Druid', 'Defiler', 'Dice', 'rattler', 'Epicure', 'Ecclesiast', 'Dragoon', 'Embezzler', 'Evoker', 'Elder', 'Duelist', 'Entrepreneur', 'Factotum', 'Eternal', 'Exemplar', 'Executioner', 'Fortune-teller', 'Evangelist', 'Fencer', 'Expert', 'Fulgurator', 'Evil-eye', 'Fighter', 'Explorer', 'Harbinger', 'Exorcist', 'Fence', 'Haruspex', 'Faithful', 'Footman', 'Filcher', 'Herald', 'Father', 'Freelancer', 'Footpad', 'Horologist', 'Gallant', 'Forger', 'Hypnotist', 'Friar', 'General', 'Fortunist', 'Illusionist', 'Heathen-slayer', 'Gentleman', 'Gambler', 'Immolator', 'Hierophant', 'Giant', 'Gammoner', 'Infinitist', 'Imam', 'Gladiator', 'Godfather', 'Insidiator', 'Initiate', 'Lich', 'Inquisitor', 'Guildmaster', 'Logician', 'Judge', 'Grenadier', 'Guildsman', 'Mage', 'Keeper', 'Guardian', 'Hedge', 'creeper', 'Magician', 'Lama', 'Guerilla', 'Magic-user', 'Medicine-man', 'Headman', 'Informer', 'Magus', 'Medium', 'Horseman', 'Joungleur', 'Marvelous', 'Missionary', 'Huntsman', 'Journeyman', 'Master', 'Monk', 'Impaler', 'Juggler', 'Mentalist', 'Mullah', 'Janissary', 'Junkman', 'Mesmerizer', 'mesmerist', 'Necromancer', 'Jouster', 'Killer', 'Mind-reader', 'Oath-keeper', 'Justicar', 'KnavePage', 'Wizard', 'Cleric', 'Warrior', 'Thief', 'Mnemonist', 'Occultist', 'Khan', 'Liar', 'Mummer', 'Omen-bringer', 'Knight', 'Lorist', 'Mysteriarch', 'Ovate', 'Lancer', 'Lyrist', 'Mystic', 'Padre', 'Legionnaire', 'Made', 'man', 'Necrope', 'Parson', 'Lieutenant', 'Magnate', 'Nigromancer', 'Patriarch', 'Lord', 'Magsman', 'Oath-taker', 'Petitioner', 'Man-at-arms', 'Palmist', 'Philosopher', 'Manslayer', 'Minstrel', 'Pedant', 'Pilgrim', 'Marauder', 'Moneylender', 'Phantasmist', 'Pious', 'Marine', 'Mugger', 'Preceptor', 'Pontiff', 'Mercenary', 'Murderer', 'Prestidigitator', 'Pope', 'Prosecutor', 'Preacher', 'Myrmidon', 'Muse', 'Psionic', 'Priest', 'Paladin', 'Pawnbroker', 'Psychic', 'Primate', 'Protector', 'Racaraide', 'Sage', 'Prognosticator', 'Pugilist', 'Raconteur', 'Savant', 'Prophet', 'Ranger', 'Rake', 'Scientist', 'Proselytizer', 'Ravager', 'Rascal', 'S??ancer', 'Psalmist', 'Reaver', 'Rhymer', 'Seer', 'Pupil', 'Samurai', 'Robber', 'Shabbat', 'Quixotic', 'Scout', 'Rogue', 'Shibbol(eth)', 'Rabbi', 'Sentinel', 'Rowdy', 'Soothsayer', 'Rector', 'Sergeant', 'Rutterkin', 'Sophist', 'Reverend', 'Sharpshooter', 'Scallywag', 'Sorcerer', 'Revivalist', 'Shield-bearer', 'Scammer', 'Spellbinder', 'Rakshasa', 'Skirmisher', 'Scoundrel', 'Spellslinger', 'Saint', 'Soldier', 'Second', 'story-man', 'Spellweaver', 'Scholar', 'Squire', 'Shadow', 'walker', 'Summoner', 'Seeker', 'Standard-bearer', 'Shark', 'Telepath', 'Sensei', 'Swashbuckler', 'Sharper', 'Teratologist', 'Sermonizer', 'Swordsman', 'Shiv', 'Thaumaturgist', 'Shaman', 'Tank', 'Skald', 'Theurgist', 'Shepherd', 'Templar', 'Slaver', 'Thought', 'Master', 'Shrinist', 'Titan', 'Sonnateer', 'Transformer', 'Soul-saver', 'Trooper', 'Spy', 'Transmogrifier', 'Speaker', 'Vanquisher', 'Swindler', 'Trickster', 'Spirit-raiser', 'Veteran', 'Thief', 'Truth-teller', 'Theist', 'Thug', 'Tyro', 'Vicar', 'Victor', 'Tomb', 'robber', 'Vigilant', 'Vowmaker', 'Viking', 'Trapsmith', 'Visionist', 'Wanderer', 'Vindicator', 'Treasure', 'hunter', 'Warden', 'Witch', 'doctor', 'Warlord', 'Troubadour', 'Warlock', 'Witness', 'Warmonger', 'Villain', 'Witch', 'Wonder', 'worker', 'Wildling', 'Waghalter', 'Wizard', 'Zealot', 'Wrestler', 'Wordsmith', 'warrior', 'wizard', 'cleric', 'thief', 'elf', 'dwarf', 'halfling', 'spellburn', 'mighty deeds', 'deed die', 'critical', 'fumble', 'birth augur', 'burning luck', 'spell duels', 'deity disapproval');

    $lastElement = count($word) -1;
    $randomWord = rand(0, $lastElement);

    $word2 = $word[$randomWord];
    $word2 = strtolower($word2); 

    $selectUpper = rand(0, 8);

    if($selectUpper === 8)
    {
        $word2 = ucfirst($word2);
    }

    return $word2;

}


function getEasternAdventureWord()
{
    $word = array('Abumi-guchi', 'Abura-akago', 'Abura-sumashi', 'Akabeko', 'Akaname', 'Akashita', 'Akateko', 'Akkorokamui', 'Akub??zu', 'Akurojin-no-hi', 'Amabie', 'Amaburakosagi', 'Amamehagi', 'Amanojaku', 'Amanozako', 'Amaterasu', 'Amazake-babaa', 'Amefurikoz??', 'Amemasu', 'Ameonna', 'Amikiri', 'Amor??nagu', 'Anmo', 'Aoandon', 'Aob??zu', 'Aony??b??', 'Aosaginohi', 'Arikura-no-baba', 'Ashimagari', 'Ashinagatenaga', 'Ayakashi (y??kai)', 'Azukiarai (or Azukitogi)', 'Bake-kujira', 'Bakeneko', 'Bakez??ri', 'Baku (spirit)', 'Basan', 'Bash??nosei', 'Betobeto-san', 'Binb??gami', 'Biwa-bokuboku', 'Buruburu', 'Byakko', 'By??bunozoki', 'Ch??chinbi', 'Ch??chinobake', 'Daidarabotchi', 'Daitengu', 'Danzaburou-danuki', 'Datsue-ba', 'Dodomeki', 'Donotsura', 'Enenra', 'Enk??', 'Funay??rei', 'Furaribi', 'Furu-utsubo', 'Furutsubaki-in-the-king', 'Futakuchi-onna', 'F??jin', 'F??ri', 'Gagoze', 'Gaki', 'Gashadokuro', 'Genbu', 'Gory??', 'Gozu and Mezu', 'Guhin', 'Gy??ki', 'Hachishaku-sama', 'Hakanohi', 'Hakuja on Myojin', 'Hakutaku', 'Hanako-san', 'Hannya', 'Haradashi', 'Harionago', 'Hashihime', 'Heikegani', 'Hibagon', 'Hiderigami', 'Hihi', 'Hikeshibaba', 'Hinode', 'Hitodama', 'Hitotsume-koz??', 'Hitotsume-ny??d??', 'Hiyorib??', 'Hoji', 'Hone-onna', 'Hoshi-no-Tama', 'Hotoke', 'Hyakki Yak??', 'Hy??sube', 'H??-??', 'H??s??shi', 'Ibaraki-doji', 'Ichiren-Bozu', 'Ikiry??', 'Ikuchi', 'Inugami Gyoubu', 'Inugami', 'Isonade', 'Issie', 'Itsumade', 'Ittan-momen', 'Iyaya', 'Jami', 'Janjanbi', 'Jatai', 'Jibakurei', 'Jikininki', 'Jinmenju', 'Jishin-namazu', 'Jor??gumo', 'Jubokko', 'Kahaku (??????)', 'Kakurezato', 'Kamaitachi', 'Kambariny??d??', 'Kameosa', 'Kanedama', 'Kappa', 'Karasu-tengu', 'Karura', 'Kasa-obake', 'Kasha', 'Katawaguruma', 'Kawaakago', 'Kawauso', 'Kechibi', 'Kene??', 'Keukegen', 'Kijimuna', 'Kirin', 'Kitsune no yomeiri', 'Kitsune', 'Kitsunebi', 'Kiyohime', 'Kodama', 'Kokakuch??', 'Komainu', 'Konaki-jiji', 'Konoha-tengu', 'Koromodako', 'Koropokkuru', 'Kosenj??bi', 'Kosode-us', 'Kubikajiri', 'Kuchisake-onna', 'Kuda-gitsune', 'Kudan', 'Kumo Y??kai', 'Kyonsh??', 'Ky??kotsu', 'Ky??rinrin', 'Mekurabe', 'Miage-ny??d??', 'Mikaribaba', 'Mikoshi-ny??d??', 'Misaki', 'Mizuchi', 'Mokumokuren', 'Momonj??', 'Mononoke', 'Morinji-no-kama', 'Mujina', 'My??bu', 'M??ry??', 'Namahage', 'Namazu', 'Nekomata', 'Ningyo', 'Nobusuma', 'Noderab??', 'Nogitsune', 'Noppera-b??', 'Nozuchi', 'Nue', 'Nukekubi', 'Nuppeppo', 'Nurarihyon', 'Nure-onna', 'Nuribotoke', 'Nurikabe', 'Ny??d??-b??zu', 'Ny??naisuzume', 'Obake (or Bakemono)', 'Obariyon', 'Oboroguruma', 'Oiwa', 'Okiku', 'Okuri-inu', 'Oni of Rashomon', 'Oni', 'Onibaba', 'Onibi', 'Onihitokuchi', 'Onikuma', 'Onmoraki', 'Onmyoji', 'Onry??', 'Osakabe', 'Otoroshi', 'Raijin', 'Raij??', 'Rokurokubi', 'Ryuu', 'R??jinbi', 'Sa Goj??', 'Samebito', 'Sankai', 'Sansei', 'Sarakazoe', 'Satori', 'Sazae-oni', 'Seiry??', 'Sessh??-seki', 'Shachihoko', 'Shibaemon-tanuki', 'Shichinin Misaki', 'Shidaidaka', 'Shikigami', 'Shikome', 'Shinigami', 'Shiranui', 'Shirime', 'Shiry??', 'Shir??neri', 'Shisa', 'Shishi', 'Shuten-doji', 'Sh??j??', 'Sh??kera', 'Son Gok??', 'Suiko', 'Sunakake Baba', 'Sunekosuri', 'Suzaku', 'Suzuri-no-tamashii ', 'S??j??b??', 'Taka-onna', 'Tamamo-no-Mae', 'Tanuki', 'Te-me', 'Teke Teke', 'Ten', 'Tengu', 'Tenj??kudari ', 'Tenka (kaika) ', 'Tenko (fox) ', 'Tennin', 'Teratsutsuki ', 'Tesso', 'Tsuchigumo', 'Tsuchinoko', 'Tsukinowaguma', 'Tsukumogami', 'Tsukuyomi', 'Tsurube-otoshi', 'T??fu-koz??', 'Ubume', 'Uma-no-ashi', 'Umi-ny??b??', 'Umib??zu', 'Ungaiky??', 'Ushi-no-tokimairi', 'Ushi-oni', 'Ushi-onna', 'Ushirogami ', 'Uwan', 'Waira', 'Wani', 'Wany??d??', 'Yad??kai', 'Yama-biko', 'Yama-inu', 'Yama-uba', 'Yamajijii', 'Yamako', 'Yamaoroshi', 'Yamata no Orochi', 'Yashima no Hage-tanuki', 'Yatagarasu', 'Yato-no-kami', 'Yobuko', 'Yomotsu-shikome', 'Yonakinoishi', 'Yosuzume', 'Yuki-onna', 'Yurei', 'Y??kai' , 'Youkai', 'Y??sei', 'Zashiki-warashi', 'Zennyo Ry????', 'Zorigami', 'Zuijin', 'Zunbera-b??', '??gama', '??kaburo ', '??kami', '??kubi', '??magatoki', 'Ukmukade', '??ny??d??');

    $lastElement = count($word) -1;
    $randomWord = rand(0, $lastElement);

    $word2 = $word[$randomWord];
    return $word2;
}




function getWord()
{
    $lowerCase = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w'. 'x', 'y', 'z');

    $wordSize = rand(3, 10);
    $word = array();

    for($i = 0; $i < $wordSize; ++$i)
    {
        $alphabetLowerCase = rand(0, count($lowerCase)-1);

        $letter = $lowerCase[$alphabetLowerCase];

        array_push($word, $letter);
    }

    $word2 = implode($word);

    return $word2;

}

function getSeperator()
{
    $seperator = rand(0, 3);

    switch($seperator)
    {
        case 0:
            return ", ";
            break;

        case 1:
            return ", ";
            break;

        case 2:
            return ", ";
            break;
        
        case 3:
            return "; ";
            break;

        default:
        return "error";
    }
}


function getSentence()
{
    $wordsNumber = rand(6, 16);

    if($wordsNumber > 8)
    {
        $seperatorBase = (int)($wordsNumber * 0.5);
        $seperatorVar = rand(-2, 2);
        $seperatorPos = $seperatorBase + $seperatorVar;
    }
    else
    {
        $seperatorPos = -1;
    }

    $sentence = array();

    for($i = 0; $i < $wordsNumber; ++$i)
    {
        $singular = rand(0, 10);
        $specialWord = rand(0, 5);

        if($specialWord === 3)
        {
            $word = getSpecialWord();
        }
        else 
        if($specialWord > 3)
        {
            $word = getEasternAdventureWord();
        }
        else
        {
            $word = getWord();
        }

        if($singular == 10)
        {
            $firstChar = substr($word, 0, 1);
            if($firstChar === 'a' || $firstChar === 'e' || $firstChar === 'i' || $firstChar === 'o' || $firstChar === 'u')
            {
                $word = 'an ' . $word;
            }
            else
            {
                $word = 'a ' . $word;
            }
        }


        if($i == 0)
        {
            $word = ucfirst($word);
        }

        array_push($sentence, $word);

        if($i < $wordsNumber-1 && $i != $seperatorPos)
        {
            array_push($sentence, ' ');
        }
        else if($i < $wordsNumber-1 && $i == $seperatorPos)
        {
            $seperator = getSeperator();
            array_push($sentence, $seperator);

        }
        else
        {
            array_push($sentence, '. ');
        }
    }

    $sentence2 = implode($sentence);

    return $sentence2;
}


function getFirstThreeSentences($input)
{
    $wordsNumber = rand(6, 16);

    if($wordsNumber > 8)
    {
        $seperatorBase = (int)($wordsNumber * 0.5);
        $seperatorVar = rand(-2, 2);
        $seperatorPos = $seperatorBase + $seperatorVar;
    }
    else
    {
        $seperatorPos = -1;
    }

    $sentence = array();

    for($i = 0; $i < $wordsNumber; ++$i)
    {
        $singular = rand(0, 10);

        if($i === 0 && $input === 0)
        {
            $word = "Dungeon";
        }
        else if($i === 0 && $input === 1)
        {
            $word = "Crawl";
        }
        else if($i === 0 && $input === 2)
        {
            $word = "Classics";
        }
        else if($i === 0 && $input === 3)
        {
            $word = "Eastern Adventures";
        }
        else
        {
            $word = getWord();
        }


        if($singular == 10)
        {
            $firstChar = substr($word, 0, 1);
            if($firstChar === 'a' || $firstChar === 'e' || $firstChar === 'i' || $firstChar === 'o' || $firstChar === 'u')
            {
                $word = 'an ' . $word;
            }
            else
            {
                $word = 'a ' . $word;
            }
        }

        if($i == 0)
        {
            $word = ucfirst($word);
        }

        array_push($sentence, $word);

        if($i < $wordsNumber-1 && $i != $seperatorPos)
        {
            array_push($sentence, ' ');
        }
        else if($i < $wordsNumber-1 && $i == $seperatorPos)
        {
            $seperator = getSeperator();
            array_push($sentence, $seperator);

        }
        else
        {
            array_push($sentence, '. ');
        }
    }

    $sentence2 = implode($sentence);

    return $sentence2;

}


function getParagraph()
{
    $numSentences = rand(3, 8);

    $paragraph = array();

    for($i = 0; $i < $numSentences; ++$i)
    {
        $sentence = getSentence();
        
        array_push($paragraph, $sentence);
        array_push($paragraph, '&nbsp;');
    }

    $paragraph2 = implode($paragraph);

    return $paragraph2;
}


function getRandomText($select)
{
    $numPara = intval($select);
    $textBlock = array();

    for($i = 0; $i < $numPara; ++$i)
    {
        $paragraph = getParagraph();

        if($i === 0)
        {
            $firstSentence = getFirstThreeSentences($i);
            $paragraph = $firstSentence . $paragraph;
        }
        
        if($i === 1)
        {
            $firstSentence = getFirstThreeSentences($i);
            $paragraph = $firstSentence . $paragraph;
        }
        
        if($i === 2)
        {
            $firstSentence = getFirstThreeSentences($i);
            $paragraph = $firstSentence . $paragraph;
        }
        
        if($i === 3)
        {
            $firstSentence = getFirstThreeSentences($i);
            $paragraph = $firstSentence . $paragraph;
        }

        array_push($textBlock, $paragraph);

    }

    return $textBlock;

}
?>