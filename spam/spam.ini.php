<?php
// $Id: spam.ini.php,v 1.57 2007/03/04 12:19:08 henoheno Exp $
// Spam-related setting
//
// Reference:
//   Spamdexing http://en.wikipedia.org/wiki/Spamdexing


$blocklist['goodhost'] = array(
	'IANA-examples' => '#^(?:.*\.)?example\.(?:com|net|org)$#',

	// PukiWiki-official/dev specific
	//'logue.tk',		// Well-known PukiWiki heavy user, Logue (Paid *.tk user, Expire on 2008-12-01)
	//'*.logue.tk',
	//'nyaa.tk',
	//'*.nyaa.tk',
	//'ifastnet.com'	// www.isfastnet.com

	// Yours
	//''
	//''
	//''

);

$blocklist['badhost'] = array(

	// A: Sample setting of
	// Existing URI redirection or masking services

	// A-1: By HTTP redirection, HTML meta, HTML frame, JavaScript,
	// or DNS subdomains
	//
	// as known as cheap URI obscuring services today,
	// for spammers and affiliate users dazed by money.
	//
	//   Messages from forerunners:
	//     o-rly.net
	//       "A URL REDIRECTION SERVICE GONE BAD"
	//       "SORRY, TRULY"
	//     smcurl.com
	//       "Idiots were using smcURL to shrink URLs and
	//        send them out via spam."
	//     tinyclick.com
	//       "...stop offering it's free services because
	//        too many people were taking advantage of it"
	//     xjs.org
	//       "We have been forced to close this facility
	//        due to a minority of knuckle draggers who
	//        abused this web site."
	//
	// Please notify us about this list with reason:
	// http://pukiwiki.sourceforge.jp/dev/?BugTrack2/207
	//

	// 0
	'*.0kn.com',		// by shim.net
	'0nz.org',
	'0rz.tw',
	'0url.com',
	'0zed.info',

	// 1
	'*.110mb.com',
	'123.que.jp',
	'12url.org',
	'*.15h.com',
	'*.1dr.biz',
	'1nk.us',
	'1url.org',
	'1url.in',
	'1webspace.org',

	// 2
	'*.2cd.net',		// by shim.net
	'2ch2.net',
	'2hop4.com',
	'2me.tw',			// by urladmin at zvxr.com, DNS arzy.net
	'2s.ca',
	'2site.com',

	// 3
	'301url.com',
	'*.321.cn',			// by active.ws
	'32url.com',
	'3dg.de',
	'*.3dg.de',

	// 4
	'*.4bb.ru',
	'*.4mg.com',		// by freeservers.com
	'*.4x2.net',		// by active.ws
	'*.4t.com',			// by freeservers.com

	// 5
	'5jp.net',

	// 6
	'6url.com',
	'*.6url.com',
	'*.6x.to',

	// 7
	'74678439.com',		// by shortify.com
	'7ref.com',

	// 8
	'*.80t.com',		// zeroweb.org
	'82m.org',
	'*.8l.pl',			// by Home.pl Sp. J. (info at home.pl)
	'*.8m.com',			// by freeservers.com
	'*.8m.net',			// by freeservers.com
	'*.8k.com',			// by freeservers.com
	'*.8rf.com',

	// 9
	'98.to',
	'*.9ax.net',		// by xn6.net

	// A
	'*.abwb.org',
	'acnw.de',
	'active.ws',
	'store.adobe.com',	// Stop it
	'aifam.com',
	'amoo.org',
	'*.andmuchmore.com',// by webalias.com
	'*.arecool.net',	// by iscool.net
	'*.assexy.as',		// sitelutions.com
	'*.asso.ws',		// xrelay.net - proxid.net
	'ataja.es',
	'*.athersite.com',	// sitelutions.com
	'*.athissite.com',	// sitelutions.com
	'atk.jp',
	'athomebiz.com',
	'athomebiz.com',
	'aukcje1.pl',

	// B
	'*.be.tf',			// by ulimit.com
	'beermapping.com',
	'*.best.cd',		// by ulimit.com
	'*.bestdeals.at',	// sitelutions.com
	'*.better.ws',		// by active.ws
	'biglnk.com',
	'bingr.com',
	'bittyurl.com',
	'*.bizz.cc',
	'*.blg.pl',			// by Home.pl Sp. J. (info at home.pl)
	'*.blo.pl',			// HTML frame
	'blue11.jp',		// by fanznet.jp
	'briefurl.com',
	'brokenscript.com',
	'*.browser.to',		// by webalias.com
	'*.bsd-fan.com',	// by ulimit.com
	'*.bucksogen.com',
	'budgethosts.org',
	'*.bulochka.org',	// by bucksogen.com
	'*.buzznet.com',
	'*.byinter.net',	// sitelutions.com
	'*.bydl.com',

	// C
	'*.c0m.st',			// by ulimit.com
	'*.c-o.cc',			// by c-o.in
	'*.c-o.in',
	'c64.ch',
	'c711.com',
	'*.ca.tc',			// by ulimit.com
	'checkasite.net',
	'*.chicappa.jp',
	'chopurl.com',
	'christopherleestreet.com',
	'*.cjb.net',
	'*.clan.st',		// by ulimit.com
	'clipurl.com',
	'*.co.nr',
	'*.com02.com',		// by ulimit.com
	'*.cool158.com',	// by cool168.com
	'*.cool168.com',
	'*.coolhere.com',	// by hotredirect.com
	'coolurl.de',
	'*.corp.st',		// xrelay.net - proxid.net
	'*.coz.in',			// by c-o.in
	'*.cq.bz',			// by c-o.in
	'cutalink.com',
	'*.cx.la',			// by dl.am

	// D
	'*.da.cx',
	'*.da.ru',
	'dae2.com',
	'dephine.org',
	'desiurl.com',
	'digbig.com',
	'*.digipills.com',
	'*.discutbb.com',
	'*.dl.am',
	'*.dmdns.com',
	'doiop.com',
	'dornenboy.de',		// by coolurl.de
	'drlinky.com',
	'dtmurl.com',		// by dreamteammoney.com
	'durl.us',
	'*.dvdonly.ru',
	'*.dynu.ca',

	// E
	'elfurl.com',
	'*.emailme.net',	// by vdirect.com
	'*.en.st',			// by ulimit.com
	'eny.pl',
	'*.escape.to',		// by webalias.com
	'*.eu.org',
	'*.euro.st',		// by ulimit.com
	'*.euro.tm',		// xrelay.net - proxid.net
	'eyeqweb.com',		// by coolurl.de

	// F
	'*.f2b.be',			// by f2b.be
	'*.faithweb.com',	// by freeservers.com
	'*.fancyurl.com',
	'fanznet.com',
	'ffwd.to',
	'url.fibiger.org',
	'*.filetap.com',	// by shorturl.co
	'*.findhere.org',	// sitelutions.comm
	'fireme.to',
	'*.firez.org',		// zeroweb.org
	'*.fizz.nu',		// zeroweb.org
	'flingk.com',
	'fm7.biz',
	'fnbi.jp',
	'*.fnbi.jp',
	'*.fornovices.com',	// by webalias.com
	'*.fr.fm',			// by ulimit.com
	'*.fr.st',			// by ulimit.com
	'*.fr.vu',			// by ulimit.com
	'*.freakz.eu',		// by f2b.be
	'*.freebiefinders.net',	// by shim.net
	'*.freecities.com',
	'*.freegaming.org',	// by shim.net
	'*.freehosting.net',// by freeservers.com
	'*.freeservers.com',
	'*.freewebpages.com',
	'fyad.org',
	'fype.com',
	'*.fun.to',			// by webalias.com
	'*.fw.nu',			// sitelutions.com
	'*.fx.to',

	// G
	'galeon.com',		// by hispavista.com
	'*.galeon.com',		// by hispavista.com
	'gentleurl.net',
	'*.get2.us',
	'*.getto.net',		// by vdirect.com
	'glinki.com',
	'*.globalredirect.com',
	'gnu.vu',
	'*.go.cc',
	'goonlink.com',
	'*.got.to',			// by webalias.com
	'gourl.org',
	'*.gourl.org',
	'*.gq.nu',			// by freeservers.com
	'*.gr.st',			// by ulimit.com
	'greatitem.com',
	'*.greatitem.com',
	'gzurl.com',
	'url.grillsportverein.de',

	// H
	'hardcore-porn.de',	// by coolurl.de
	'*.hasballs.com',	// by get2.us
	'here.is',
	'*.here.ws',		// by active.ws
	'*.hispavista.com',
	'*.homepagehere.com',// by hotredirect.com
	'hort.net',
	'*.hotindex.ru',
	'hotshorturl.com',
	'*.hothere.com',	// by hotredirect.com
	'*.hottestpix.com',	// by webalias.com
	'hurl.to',
	'*.ht.st',			// by ulimit.com
	'*.htmlplanet.com',	// by freeservers.com
	'*.hux.de',
	'*.hyu.jp',			// by harudake.net

	// I
	'*.i89.us',
	'*.iceglow.com',
	'ie.to',
	'igoto.co.uk',
	'ilook.tw',
	'*.imegastores.com',// by webalias.com
	'*.inetgames.com',	// by vdirect.com
	'inetwork.co.il',
	'*.ingame.org',		// zeroweb.org
	'*.infogami.com',
	'*.int.ms',			// by ulimit.com
	'ipoo.org',
	'*.irio.net',		// zeroweb.org
	'irotator.com',
	'*.iscool.net',
	'*.isfun.net',		// by iscool.net
	'*.isgre.at',		// sitelutions.com
	'*.ismyidol.com',	// by get2.us
	'*.isthebe.st',		// sitelutions.com
	'*.it.st',			// by ulimit.com
	'*.itgo.com',		// by freeservers.com
	'*.iwarp.com',		// by freeservers.com
	'iwebtool.com',
	'*.iwebtool.com',

	// J
	'jeeee.net',
	'jemurl.com',
	'jggj.net',
	'jpan.jp',
	'*.java-fan.com',	// by ulimit.com
	'jmp2.net',			// by URLadmin at ZVXR.Com, DNS arzy.net

	// K
	'kat.cc',
	'katou.in',			// by fanznet.com
	'kickme.to' => array(
		'1024bit.at',
		'*.1024bit.at',
		'128bit.at',
		'*.128bit.at',
		'16bit.at',	
		'*.16bit.at',
		'256bit.at',
		'*.256bit.at',
		'32bit.at',	
		'*.32bit.at',
		'512bit.at',
		'*.512bit.at',
		'64bit.at',	
		'*.64bit.at',
		'8bit.at',	
		'*.8bit.at',
		'adores.it',
		'*.adores.it',
		'again.at',	
		'*.again.at',
		'allday.at',
		'*.allday.at',
		'alone.at',	
		'*.alone.at',
		'altair.at',
		'*.altair.at',
		'american.at',
		'*.american.at',
		'amiga500.at',
		'*.amiga500.at',
		'ammo.at',	
		'*.ammo.at',
		'amplifier.at',
		'*.amplifier.at',
		'amstrad.at',
		'*.amstrad.at',
		'anglican.at',
		'*.anglican.at',
		'angry.at',	
		'*.angry.at',
		'around.at',
		'*.around.at',
		'arrange.at',
		'*.arrange.at',
		'australian.at',
		'*.australian.at',
		'baptist.at',
		'*.baptist.at',
		'basque.at',
		'*.basque.at',
		'battle.at',
		'*.battle.at',
		'bazooka.at',
		'*.bazooka.at',
		'berber.at',
		'*.berber.at',
		'blackhole.at',
		'*.blackhole.at',
		'booze.at',	
		'*.booze.at',
		'bosnian.at',
		'*.bosnian.at',
		'brainiac.at',
		'*.brainiac.at',
		'brazilian.at',
		'*.brazilian.at',
		'bummer.at',
		'*.bummer.at',
		'burn.at',	
		'*.burn.at',
		'c-64.at',	
		'*.c-64.at',
		'catalonian.at',
		'*.catalonian.at',
		'catholic.at',
		'*.catholic.at',
		'chapel.at',
		'*.chapel.at',
		'chills.it',
		'*.chills.it',
		'christiandemocrats.at',
		'*.christiandemocrats.at',
		'cname.at',	
		'*.cname.at',
		'colors.at',
		'*.colors.at',
		'commodore.at',
		'*.commodore.at',
		'commodore64.at',
		'*.commodore64.at',
		'communists.at',
		'*.communists.at',
		'conservatives.at',
		'*.conservatives.at',
		'conspiracy.at',
		'*.conspiracy.at',
		'cooldude.at',
		'*.cooldude.at',
		'craves.it',
		'*.craves.it',
		'croatian.at',
		'*.croatian.at',
		'cuteboy.at',
		'*.cuteboy.at',
		'dancemix.at',
		'*.dancemix.at',
		'danceparty.at',
		'*.danceparty.at',
		'dances.it',
		'*.dances.it',
		'danish.at',
		'*.danish.at',
		'dealing.at',
		'*.dealing.at',
		'deep.at',	
		'*.deep.at',
		'democrats.at',
		'*.democrats.at',
		'digs.it',	
		'*.digs.it',
		'divxlinks.at',
		'*.divxlinks.at',
		'divxmovies.at',
		'*.divxmovies.at',
		'divxstuff.at',
		'*.divxstuff.at',
		'dizzy.at',	
		'*.dizzy.at',
		'does.it',	
		'*.does.it',
		'dork.at',	
		'*.dork.at',
		'drives.it',
		'*.drives.it',
		'dutch.at',	
		'*.dutch.at',
		'dvdlinks.at',
		'*.dvdlinks.at',
		'dvdmovies.at',
		'*.dvdmovies.at',
		'dvdstuff.at',
		'*.dvdstuff.at',
		'emulators.at',
		'*.emulators.at',
		'end.at',	
		'*.end.at',
		'english.at',
		'*.english.at',
		'eniac.at',	
		'*.eniac.at',
		'error403.at',
		'*.error403.at',
		'error404.at',
		'*.error404.at',
		'evangelism.at',
		'*.evangelism.at',
		'exhibitionist.at',
		'*.exhibitionist.at',
		'faith.at',	
		'*.faith.at',
		'fight.at',	
		'*.fight.at',
		'finish.at',
		'*.finish.at',
		'finnish.at',
		'*.finnish.at',
		'forward.at',
		'*.forward.at',
		'freebie.at',
		'*.freebie.at',
		'freemp3.at',
		'*.freemp3.at',
		'french.at',
		'*.french.at',
		'graduatejobs.at',
		'*.graduatejobs.at',
		'greenparty.at',
		'*.greenparty.at',
		'grunge.at',
		'*.grunge.at',
		'hacked.at',
		'*.hacked.at',
		'hang.at',	
		'*.hang.at',
		'hangup.at',
		'*.hangup.at',
		'has.it',	
		'*.has.it',
		'hide.at',	
		'*.hide.at',
		'hindu.at',	
		'*.hindu.at',
		'htmlpage.at',
		'*.htmlpage.at',
		'hungarian.at',
		'*.hungarian.at',
		'icelandic.at',
		'*.icelandic.at',
		'independents.at',
		'*.independents.at',
		'invisible.at',
		'*.invisible.at',
		'is-chillin.it',
		'*.is-chillin.it',
		'is-groovin.it',
		'*.is-groovin.it',
		'japanese.at',
		'*.japanese.at',
		'jive.at',	
		'*.jive.at',
		'kickass.at',
		'*.kickass.at',
		'kickme.to',
		'*.kickme.to',
		'kindergarden.at',
		'*.kindergarden.at',
		'knows.it',	
		'*.knows.it',
		'kurd.at',	
		'*.kurd.at',
		'labour.at',
		'*.labour.at',
		'leech.at',	
		'*.leech.at',
		'liberals.at',
		'*.liberals.at',
		'linuxserver.at',
		'*.linuxserver.at',
		'liqour.at',
		'*.liqour.at',
		'lovez.it',	
		'*.lovez.it',
		'makes.it',	
		'*.makes.it',
		'maxed.at',	
		'*.maxed.at',
		'means.it',	
		'*.means.it',
		'meltdown.at',
		'*.meltdown.at',
		'methodist.at',
		'*.methodist.at',
		'microcomputers.at',
		'*.microcomputers.at',
		'mingle.at',
		'*.mingle.at',
		'mirror.at',
		'*.mirror.at',
		'moan.at',	
		'*.moan.at',
		'mormons.at',
		'*.mormons.at',
		'musicmix.at',
		'*.musicmix.at',
		'nationalists.at',
		'*.nationalists.at',
		'needz.it',	
		'*.needz.it',
		'nerds.at',	
		'*.nerds.at',
		'neuromancer.at',
		'*.neuromancer.at',
		'newbie.at',
		'*.newbie.at',
		'nicepage.at',
		'*.nicepage.at',
		'ninja.at',	
		'*.ninja.at',
		'norwegian.at',
		'*.norwegian.at',
		'ntserver.at',
		'*.ntserver.at',
		'owns.it',	
		'*.owns.it',
		'paint.at',	
		'*.paint.at',
		'palestinian.at',
		'*.palestinian.at',
		'phoneme.at',
		'*.phoneme.at',
		'phreaking.at',
		'*.phreaking.at',
		'playz.it',	
		'*.playz.it',
		'polish.at',
		'*.polish.at',
		'popmusic.at',
		'*.popmusic.at',
		'portuguese.at',
		'*.portuguese.at',
		'powermac.at',
		'*.powermac.at',
		'processor.at',
		'*.processor.at',
		'prospects.at',
		'*.prospects.at',
		'protestant.at',
		'*.protestant.at',
		'rapmusic.at',
		'*.rapmusic.at',
		'raveparty.at',
		'*.raveparty.at',
		'reachme.at',
		'*.reachme.at',
		'reads.it',	
		'*.reads.it',
		'reboot.at',
		'*.reboot.at',
		'relaxed.at',
		'*.relaxed.at',
		'republicans.at',
		'*.republicans.at',
		'researcher.at',
		'*.researcher.at',
		'reset.at',	
		'*.reset.at',
		'resolve.at',
		'*.resolve.at',
		'retrocomputers.at',
		'*.retrocomputers.at',
		'rockparty.at',
		'*.rockparty.at',
		'rocks.it',	
		'*.rocks.it',
		'rollover.at',
		'*.rollover.at',
		'rough.at',	
		'*.rough.at',
		'rules.it',	
		'*.rules.it',
		'rumble.at',
		'*.rumble.at',
		'russian.at',
		'*.russian.at',
		'says.it',	
		'*.says.it',
		'scared.at',
		'*.scared.at',
		'seikh.at',	
		'*.seikh.at',
		'serbian.at',
		'*.serbian.at',
		'short.as',	
		'*.short.as',
		'shows.it',	
		'*.shows.it',
		'silence.at',
		'*.silence.at',
		'simpler.at',
		'*.simpler.at',
		'sinclair.at',
		'*.sinclair.at',
		'singz.it',	
		'*.singz.it',
		'slowdown.at',
		'*.slowdown.at',
		'socialists.at',
		'*.socialists.at',
		'spanish.at',
		'*.spanish.at',
		'split.at',	
		'*.split.at',
		'stand.at',	
		'*.stand.at',
		'stoned.at',
		'*.stoned.at',
		'stumble.at',
		'*.stumble.at',
		'supercomputer.at',
		'*.supercomputer.at',
		'surfs.it',	
		'*.surfs.it',
		'swedish.at',
		'*.swedish.at',
		'swims.it',	
		'*.swims.it',
		'synagogue.at',
		'*.synagogue.at',
		'syntax.at',
		'*.syntax.at',
		'syntaxerror.at',
		'*.syntaxerror.at',
		'techie.at',
		'*.techie.at',
		'temple.at',
		'*.temple.at',
		'thinkbig.at',
		'*.thinkbig.at',
		'thirsty.at',
		'*.thirsty.at',
		'throw.at',	
		'*.throw.at',
		'toplist.at',
		'*.toplist.at',
		'trekkie.at',
		'*.trekkie.at',
		'trouble.at',
		'*.trouble.at',
		'turkish.at',
		'*.turkish.at',
		'unexplained.at',
		'*.unexplained.at',
		'unixserver.at',
		'*.unixserver.at',
		'vegetarian.at',
		'*.vegetarian.at',
		'venture.at',
		'*.venture.at',
		'verycool.at',
		'*.verycool.at',
		'vic-20.at',
		'*.vic-20.at',
		'viewing.at',
		'*.viewing.at',
		'vintagecomputers.at',
		'*.vintagecomputers.at',
		'virii.at',	
		'*.virii.at',
		'vodka.at',	
		'*.vodka.at',
		'wannabe.at',
		'*.wannabe.at',
		'webpagedesign.at',
		'*.webpagedesign.at',
		'wheels.at',
		'*.wheels.at',
		'whisper.at',
		'*.whisper.at',
		'whiz.at',	
		'*.whiz.at',
		'wonderful.at',
		'*.wonderful.at',
		'zor.org',	
		'*.zor.org',
		'zx80.at',	
		'*.zx80.at',
		'zx81.at',	
		'*.zx81.at',
		'zxspectrum.at',
		'*.zxspectrum.at',
	),
	'kisaweb.com',
	'*.ko188.com',		// by cool168.com
	'*.ko168.com',		// by cool168.com
	'*.korzhik.org',	// by bucksogen.com
	'*.kovrizhka.org',	// by bucksogen.com
	'krotki.pl',
	'kuerzer.de',
	'*.kupisz.pl',
	'kuso.cc',
	'*.kwik.to',		// sitelutions.com

	// L
	'lame.name',
	'*.latest-info.com',// by webalias.com
	'*.learn.to',		// by webalias.com
	'lediga.st',
	'liencourt.com',
	'liteurl.com',
	'lnk.nu',			// minilink.org
	'linkachi.com',
	'linkezy.com',
	'linkook.com',
	'linkzip.net',
	'*.linux-fan.com',	// by ulimit.com
	'lispurl.com',
	'lnk.in',
	'*.lookin.at',		// sitelutions.com
	'*.lowestprices.at',// sitelutions.com

	// M
	'*.mac-fan.com',	// by ulimit.com
	'makeashorterlink.com',
	'maschinen-bluten-nicht.de',// by coolurl.de
	'mcturl.com',
	'memurl.com',
	'minilien.com',		// by digipills.com
	'miniurl.org',
	'miniurl.pl',
	'mixi.bz',
	'mo-v.jp',
	'monster-submit.com',
	'mooo.jp',
	'*.moviefever.com',	// by webalias.com
	'*.mp3.ms',			// by ulimit.com
	'*.mp3-archives.com',	// by webalias.com
	'murl.net',
	'*.mustbehere.com',	// by hotredirect.com
	'myactivesurf.net',
	'mymap.in',			// by fanznet.com
	'*.mypiece.com',	// by active.ws
	'*.myprivateidaho.com',	// by webalias.com
	'mytinylink.com',
	'myurl.in',
	'myurl.com.tw',

	// N
	'*.n0.be',			// by f2b.be
	'*.n3t.nl',			// by f2b.be
	'nanoref.com',
	'*.ne1.net',
	'*.netbounce.com',	// by vdirect.com
	'*.netbounce.net',	// by vdirect.com
	'nextdoor.to',		// by fireme.to
	'nlug.org',			// by Nashville Linux Users Group
	'not2long.net',
	'*.notlong.com',
	'*.nuv.pl',

	// O
	'*.official.ws',	// by active.ws
	'ofzo.be',
	'*.oneaddress.net',	// by vdirect.com
	'*.onlyhere.net',	// by hotredirect.com
	'*.ontheinter.net',
	'*.onthenet.as',	// sitelutions.com
	'*.ontheweb.nu',	// sitelutions.com
	'ontheway.to',		// by fireme.to
	'*.op7.net',		// by shim.net
	'*.ouch.ws',		// by active.ws

	// P
	'*.p2p.gr',			// subdomain.gr
	'*.pagehere.com',	// by hotredirect.com
	'palurl.com',
	'*.pass.as',		// sitelutions.com
	'*.passingg.as',	// sitelutions.com
	'*.paulding.net',
	'*.perso.tc',		// xrelay.net - proxid.net 
	'phpfaber.org',
	'*.pirozhok.org',	// by bucksogen.com
	'*.plushka.org',	// by bucksogen.com
	'pnope.com',
	'*.premium.ws',		// by active.ws
	'prettylink.com',
	'*.pryanik.org',	// by bucksogen.com

	// Q
	'*.qc.tc',			// by ulimit.com
	'qrl.jp',
	'qurl.net',
	'qwer.org',

	// R
	'*.r8.org',			// by ne1.net
	'*.radpages.com',	// by webalias.com
	'*.red.tc',			// redirectfree.com
	'*.redirect.hm',	// sitelutions.com
	'*.redirectfree.com',
	'redirme.com',
	'redirectme.to',
	'relic.net',
	'*.remember.to',	// by webalias.com
	'*.resourcez.com',	// by webalias.com
	'*.return.to',		// by webalias.com
	'rezma.info',
	'rio.st',
	'*.rmcinfo.fr',
	'*.rr.nu',			// sitelutions.com
	'rubyurl.com',
	'*.runboard.com',
	'runurl.com',
	'*.ryj.pl',			// by Home.pl Sp. J. (info at home.pl)

	// S
	's-url.net',
	'*.s5.com',			// by freeservers.com
	'*.sail.to',		// by webalias.com
	'saitou.in',		// by fanznet.com
	'satou.in',			// by fanznet.com
	'*.scriptmania.com',// by freeservers.com
	'*.sg5.info',
	'*.shim.net',
	'shorl.com',
	'*.short.be',		// by f2b.be
	'shortenurl.com',
	'shorterlink.com',
	'shortlinks.co.uk',
	'shorttext.com',
	'shorturl-accessanalyzer.com',
	'shortify.com',
	'shortlink.co.uk',
	'shorturl.com' => array(
		'*.1sta.com',
		'*.24ex.com',
		'*.2fear.com',
		'*.2fortune.com',
		'*.2freedom.com',
		'*.2hell.com',
		'*.2savvy.com',
		'*.2truth.com',
		'*.2tunes.com',
		'*.2ya.com',
		'*.alturl.com',
		'*.antiblog.com',
		'*.bigbig.com',
		'*.dealtap.com',
		'*.ebored.com',
		'*.echoz.com',
		'*.funurl.com',
		'*.headplug.com',
		'*.hereweb.com',
		'*.hitart.com',
		'*.mirrorz.com',
		'*.shorturl.com',
		'*.spyw.com',
		'*.vze.com',
	),
	'shrinkalink.com',
	'shrinkthatlink.com',
	'shrinkurl.us',
	'shrt.org',
	'shrunkurl.com',
	'shurl.org',
	'shurl.net',
	'sid.to',
	'simurl.com',
	'*.site.tc',		// xrelay.net - proxid.net
	'*.skracaj.pl',
	'skiltechurl.com',
	'skocz.pl',
	'*.sky.tc',			// redirectfree.com
	'slimurl.jp',
	'smallurl.eu',
	'smurl.name',
	'*.snapto.net',		// by vdirect.com
	'snipurl.com',
	'*.societe.st',		// xrelay.net - proxid.net
	'*.sp.st',			// by ulimit.com
	'sp-nov.net',
	'splashblog.com',
	'*.sports-reports.com',// by webalias.com
	'*.spotted.us',		// by get2.us
	'*.ssr.be',			// by f2b.be
	'*.stop.to',		// by webalias.com
	'*.subdomain.gr',
	'*.such.info',		// by active.ws
	'*.suisse.st',		// by ulimit.com
	'*.surfhere.net',	// by hotredirect.com
	'surl.dk',			// by s-url.dk
	'surl.ws',
	'susan.in',			// by fanznet.com
	'*.sushka.org',		// by bucksogen.com
	'symy.jp',

	// T
	'*.t2u.com',		// by ulimit.com
	'tdurl.com',
	'*.team.st',		// wb.st
	'*.the.vg',		// redirectfree.com
	'*.thrill.to',		// by webalias.com
	'tighturl.com',
	'tiniuri.com',
	'*.tiny.cc',
	'tiny.pl',
	'tiny2go.com',
	'tinylink.com',		// by digipills.com
	'tinylink.eu',
	'tinylinkworld.com',
	'tinypic.com',
	'tinyr.us',
	'tinyurl.com',
	'tinyurl.name',		// by comteche.com
	'tinyurl.us',		// by comteche.com
	'titlien.com',
	'*.tk',				// 'Tokelau' ccTLD
	'tlurl.com',	
	'link.toolbot.com',
	'tnij.org',
	'*.toolbot.com',
	'*.tophonors.com',	// by webalias.com
	'*.torontonian.com',
	'trimurl.com',
	'*.true.ws',		// by active.ws
	'ttu.cc',
	'turl.jp',
	'*.tux.nu',			// by iscool.net
	'*.tvheaven.com',	// by freeservers.com
	'*.tweaker.eu',		// by f2b.be
	'*.tz4.com',

	// U
	'uchinoko.in',
	'*.uncutuncensored.com',// by webalias.com
	'*.ugly.as',		// sitelutions.com
	'*.uni.cc',
	'*.unixlover.com',	// by ulimit.com
	'*.up.to',			// by webalias.com
	'*.uploadr.com',
	'url.vg',			// by jeremyjohnstone.com
	'url4.net',
	'url-c.com',
	'urlbee.com',
	'urlbounce.com',
	'urlcut.com',
	'urlcutter.com',
	'urlic.com',
	'urlin.it',
	'urlser.com',
	'urlsnip.com',
	'urlzip.de',
	'urlx.org',
	'utun.jp',

	// V
	'*.v27.net',
	'*.v33.org',		// zeroweb.org
	'*.v9z.com',		// by shim.net
	'*.vdirect.com',	// by vdirect.com
	'*.vdirect.net',	// by vdirect.com
	'*.veryweird.com',	// by webalias.com
	'vgo2.com',
	'*.visit.ws',		// by active.ws

	// W
	'w3t.org',
	'wapurl.co.uk',
	'*.way.to',			// by webalias.com
	'*.wb.st',
	'wbkt.net',
	'*.web-freebies.com',// by webalias.com
	'*.webalias.com',
	'*.webdare.com',	// by webalias.com
	'webmasterwise.com',
	'*.webrally.net',	// by vdirect.com
	'*.went2.us',		// by get2.us
	'*.wentto.us',		// by get2.us
	'wittylink.com',
	'wiz.sc',			// tiny.cc related

	// X
	'*.i50.de',			// x50.us
	'*.x50.us',
	'*.xit.pl',			// by Home.pl Sp. J. (info at home.pl)
	'*.xlc.pl',			// by Home.pl Sp. J. (info at home.pl)
	'xhref.com',
	'*.xn6.net',
	'xrl.us',			// by metamark.net
	'*.xxx-posed.com',	// by webalias.com

	// Y
	'y11.net',
	'*.y11.net',
	'yatuc.com',
	'yep.it',
	'yurel.com',

	// Z
	'z.la',
	't.z.la',			// by z.la
	'zapurl.com',
	'zarr.co.uk',
	'*.zeroweb.org',
	'*.zik.mu',			// by ulimit.com
	'zippedurl.com',
	'*.zonehere.com',	// by hotredirect.com
	'*.zu5.net',
	'zuso.tw',
	'*.zwap.to',

	// A-2: Dynamic DNS, Dynamic IP services, DNS vulnerabilities, or another DNS cases
	//
	//'*.ath.cx',				// by dydns.com
	//'*.bpa.nu',				// by ddns.ru
	//'*.dnip.net',
	//'*.dnsalias.org',			// by dydns.com
	//'*.dyndns.*',
		//'*.dyndns.dk',
		//'*.dyndns.co.za',
		//'*.dyndns.org',	// by dydns.com
		//'*.dyndns.nemox.net',
	//'*.dynu.com',
	//'*.shacknet.nu',		// by dydns.com
	//'*.nerdcamp.net',
	//'*.zenno.info',
	//'*.mine.nu',			// by dydns.com
	//'*.cm',	// 'Cameroon' ccTLD, sometimes used as typo of '*.com'
			// and all non-recorded domains redirect to 'agoga.com' now


	// B: Sample setting of:
	// Jacked (taken advantage of) and cleaning-less sites
	//
	// Please notify us about this list with reason:
	// http://pukiwiki.sourceforge.jp/dev/?BugTrack2%2F208

	// B-1: Web spaces
	//
	//   Messages from forerunners:
	//     activefreehost.com
	//       "We regret to inform you that ActiveFreeHost
	//        free hosting service has is now closed (as of
	//        September 18). We have been online for over
	//        two and half years, but have recently decided
	//        to take time for software improvement to fight
	//        with server abuse, Spam advertisement and
	//        fraud."
	//

	// by 100 Best Inc (info at 100best.com)
	'100 Best Inc' => array(
		'*.0-st.com',
		'*.150m.com',	// by 100 Best, Inc., NS by 0catch.com
		'*.2-hi.com',
		'*.20fr.com',
		'*.20ii.com',
		'*.20is.com',
		'*.20it.com',
		'*.20m.com',	// by jlee at 100bestinc.com
		'*.20me.com',
		'*.20to.com',
		'*.2u-2.com',
		'*.3-st.com',
		'*.fws1.com',
		'*.fw-2.com',
		'*.inc5.com',
		'*.on-4.com',
		'*.st-3.com',
		'*.st20.com',
		'*.up-a.com',
	),
	'*.0catch.com',		// by bluehost.com
	'*.0moola.com',
	'20six weblog services' => array(
		'20six.nl',			// by 20six weblog services (postmaster at 20six.nl)
		'*.20six.nl',
		'20six.co.uk',
		'*.20six.co.uk',
		'20six.fr',
		'*.20six.fr',
		'myblog.de',
		'myblog.es',
	),
	'*.2page.de',
	'*.501megs.com',
	'*.50megs.com',
	'501megs.com',
	'*.9999mb.com',
	'*.9k.com',
	'*.aimoo.com',
	'*.alice.it',
	'*.alkablog.com',
	'home.aol.com',
	'hometown.aol.com',
	'hometown.aol.de',
	'angelfire.com',	// angelfire.lycos.com
	'm.askfaq.org',
	'*.atfreeforum.com',
	'*.asphost4free.com',
	'*.beeplog.com',
	'bestfreeforums.com',
	'*.blog.hr',
	'blogas.lt',
	'*.blogg.de',
	'*.bloggingmylife.com',
	'bloggers.nl',
	'*.blogharbor.com',
	'blogosfer.com',
	'*.blogspot.com',		// by Google
	'blogyaz.com',
	'*.bravenet.com',
	'*.by.ru',
	'blogs.chueca.com',
	'concepts-mall.com',
	'*.createmybb.com',
	'dakrats.net',
	'*.devil.it',
	'*.diaryland.com',
	'*.dox.hu',
	'dreipage.de',		// by 2page.de
	'*.eblog.com.au',
	'*.ekiwi.de',
	'forum.ezedia.net',
	'*.extra.hu',
	'fingerprintmedia.com',
	'*.filelan.com',
	'*.free-25.de',
	'*.free-bb.com',
	'freebb.nl',
	'*.freeclans.de',
	'*.freelinuxhost.com',	// by 100webspace.com
	'freeforum.at',
	'freewebs.com',
	'foroswebgratis.com',
	'*.fory.pl',
	'*.forum-on.de',
	'forumnow.com.br',
	'*.forumppl.com',
	'forumprofi' => '#^(?:.*\.)?forumprofi[0-9]*\.de$#',
	'forumup' => '#^^(?:.*\.)?forumup\.' .
		'(?:at|be|ca|ch|co\.nz|co\.uk|co\.za|com|com.au|cn|' .
		'cz|de|dk|es|eu|fr|gr|hu|in|info|ir|it|jobs|jp|lt|' .
		'lv|org|pl|name|net|nl|ro|ru|se|sk|tv|us|web\.tr)$#',
	'freepowerboards.com',
	'*.freepowerboards.com',
	'gossiping.net',
	'*.hit.bg',				// by forumup.com ??
	'gb-hoster.de',
	'*.goodboard.de',
	'docs.google.com',			// by Google
	'enunblog.com',
	'club.giovani.it',
	'groups-beta.google.com',	// by Google
	'healthcaregroup.com',
	'*.hk.pl',				// by info at home.pl
	'*.host-page.com',
	'*.home.pl',			// by info at home.pl
	'*.hut2.ru',
	'ieurop.net' => array(
		'*.ibelgique.com',
		'*.iespana.es',	
		'*.ifrance.com',
		'*.iitalia.com',
		'*.iquebec.com',
		'*.isuisse.com',
	),
	'*.ifastnet.com',
	'*.ihateclowns.net',
	'iwannaforum.com',
	'*.iwannaforum.com',
	'*.journalscape.com',
	'*.kokoom.com',
	'*.ksiegagosci.info',
	'*.land.ru',			// pochta.ru related
	'limmon.net',
	'*.logme.nl',
	'ltss.luton.ac.uk',
	'*.lycos.it',
	'angelfire.lycos.com',
	'*.messageboard.nl',
	'*.monforum.com',
	'*.monforum.fr',		// by monforum.com
	'myblog.is',
	'myblogma.com',
	'*.myblogvoice.com',
	'*.myforum.ro',
	'*.myxhost.com',
	'*.narod.ru',
	'*.netfast.org',
	'neweconomics.info',
	'*.nm.ru',
	'*.parlaris.com',
	'*.phorum.pl',
	'*.phpbbx.de',
	'*.pochta.ru',
	'proboards' => '#^(?:.*\.)proboards[0-9]*\.com$#',
	'*.prophp.org',		// pro-php.org
	'*.quickfreehost.com',
	'quizilla.com',
	'razyboard.com',
	'realhp.de',
	'rin.ru' => array(
		'*.sbn.bz',
		'*.wol.bz',
	),
	'*.sayt.ws',
	'*.siamforum.com',
	'*.siteburg.com',
	'*.spazioforum.it',
	'*.spicyblogger.com',
	'*.spotbb.com',
	'*.squarespace.com',
	'stickypond.com',
	'*.stormloader.com',
	'*.t35.com',
	'*.talkthis.com',
	'tbns.net',
	'telasipforums.com',
	'thestudentunderground.org',
	'think.ubc.ca',
	'*.tripod.com',
	'UcoZ Web-Services' => array(
		'*.3dn.ru',
		'*.clan.su',
		'*.moy.su',
		'*.my1.ru',
		'*.p0.ru',
		'*.pp.net.ua',
		'*.ucoz.co.uk',
		'*.ucoz.com',
		'*.ucoz.net',
		'*.ucoz.org',
		'*.ucoz.ru',
		'*.ws.co.ua',
	),
	'*.vidiac.com',
	'volny.cz',
	'*.welover.org',
	'webblog.ru',
	'weblogmaniacs.com',
	'websitetoolbox.com',
	'wh-gb.de',
	'*.wikidot.com',
	'*.wmjblogs.ru',
	'*.wordpress.com',
	'wsboards.com',
	'*.wsboards.com',
	'xeboards.com',
	'*.xhostar.com',
	'blogs.ya.com',
	'yourfreebb.de',
	'your-websites.com' => array(
		'*.your-websites.net',
		'*.web-space.ws',
	),

	// B-2: Jacked contents, something implanted
	// (e.g. some sort of blog comments, BBSes, forums, wikis)
	'*.aamad.org',
	'alwanforthearts.org',
	'anewme.org',
	'blepharospasm.org',
	'*.buzznet.com',
	'*.colourware.co.uk',
	'icu.edu.ua',
	'*.iphpbb.com',
	'board-z.de',
	'*.board-z.de',
	'writing.csustan.edu',
	'delayedreaction.org',
	'deproduction.org',
	'dc503.org',
	'fhmcsa.org.au',
	'*.fhmcsa.org.au',
	'forum.lixium.fr',
	'hullandhull.com',
	'funkdoc.com',
	'*.goodboard.de',
	'homepage-dienste.com',
	'*.inventforum.com',
	'plone4.fnal.gov',
	'funnyclipcentral.com',
	'ghettojava.com',
	'huskerink.com',
	'hyba.info',
	'*.hyba.info',
	'ipwso.org',
	'internetincomeclub.com',
	'jloo.org',
	'*.jloo.org',
	'test.kernel.org',
	'kevindmurray.com',
	'macfaq.net',
	'me4x4.com',
	'morallaw.org',
	'morerevealed.com',
	'mamiya.co.uk',
	'mountainjusticemedia.org',
	'*.mybbland.com',
	'users.nethit.pl',
	'njbodybuilding.com',
	'nlen.org',
	'offtextbooks.com',
	'omikudzi.ru',
	'pix4online.co.uk',
	'preform.dk',
	'privatforum.de',
	'*.reallifelog.com',
	'rkphunt.com',
	'saskchamber.com',
	'selikoff.net',
	'setbb.com',
	'silver-tears.net',
	'troms-slekt.com',
	'dir.kzn.ru',			// by Kazan State University
	'sys.kcn.ru',			// by Kazan State University
	'theedgeblueisland.com',
	'mathbio.truman.edu',
	'tzaneen.co.za',
	'urgentclick.com',
	'vacant.org.uk',
	'wolvas.org.uk',
	'wvup.edu',
	'youthpeer.org',
	'*.zenburger.com',


	// C: Sample setting of:
	// Exclusive spam domains
	//
	// Seems to have flavor of links, pills, gamble, online-games, erotic,
	// affiliates, finance, sending viruses, malicious attacks to browsers,
	// and/or mixed ones
	//
	// Please notify us about this list with reason:
	// http://pukiwiki.sourceforge.jp/dev/?BugTrack2/208

	// C-1: Domain sets (seems to be) born to spam you
	//
	// All buziness-related spam
	//'*.biz'
	//
	'admin at seekforweb.com' => array(
		'*.lovestoryx.com',	// by Boris (admin at seekforweb.com, bbmfree at yahoo.com)
		'*.loveaffairx.com',// by Boris (admin at seekforweb.com, bbmfree at yahoo.com)
		'*.onmore.info',	// by Boris (admin at seekforweb.com, bbmfree at yahoo.com)
		'*.scfind.info',	// by Boris (admin at seekforweb.com, bbmfree at yahoo.com)
		'*.scinfo.info',	// by Boris (admin at seekforweb.com, bbmfree at yahoo.com)
		'*.webwork88.info',	// by Boris (admin at seekforweb.com, bbmfree at yahoo.com)
	),
	//
	// by Boris (boss at bse-sofia.bg)
	'boss at bse-sofia.bg' => array(
		'htewbop.org',
		'*.htewbop.org',
		'*.kimm--d.org',
		'*.gtre--h.org',
		'*.npou--k.org',
		'*.bres--z.org',
		'berk--p.org',
		'*.bplo--s.org',
		'*.basdpo.org',
		'jisu--m.org',
		'kire--z.org',
		'*.mertnop.org',
		'mooa--c.org',
		'nake--h.org',
		'noov--b.org',
		'suke--y.org',
		'vasdipv.org',
		'*.vasdipv.org',
		'vase--l.org',
		'vertinds.org',
	),
	//
	// by Thai Dong Changli (pokurim at gamebox.net)
	'Thai Dong Changli' => array(
		'*.aqq3.info',
		'*.axa00.info',
		'*.okweb11.org',
		'*.okweb12.org',
		'*.okweb13.org',
		'*.okweb14.org',
	),
	//
	// by opezdol at gmail.com
	'opezdol' => array(
		'informazionicentro.info',
		'*.informazionicentro.info',
		'notiziacentro.info',
		'*.notiziacentro.info',
	),
	//
	'xxxgen' => array(
		'*.adult-cam-chat-sex.info',	// by Lee Chang (nebucha at model-x.com)
		'*.adult-chat-world.info',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com),
		'*.adult-chat-world.org',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
		'*.adult-sex-chat.info',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
		'*.adult-sex-chat.org',		// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
		'*.adult-cam-chat.info',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
		'*.adult-cam-chat.org',		// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
		'*.dildo-chat.org',			// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
		'*.dildo-chat.info',		// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
		// flirt-online.info is not CamsGen
		'*.flirt-online.org',		// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
		'*.live-adult-chat.info',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
		'*.live-adult-chat.org',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
		'*.sexy-chat-rooms.info',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
		'*.sexy-chat-rooms.org',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
		'*.swinger-sex-chat.info',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
		'*.swinger-sex-chat.org',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
		'*.nasty-sex-chat.info',	// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
		'*.nasty-sex-chat.org',		// 'CamsGen' by Lui Xeng Shou (camsgen at model-x.com)
		'*.camshost.info',			// 'CamsGen' by Sergey (buckster at hotpop.com)
		'*.camdoors.info',			// 'CamsGen' by Sergey (buckster at hotpop.com)
		'*.chatdoors.info',			// 'CamsGen' by Sergey (buckster at hotpop.com)
		'*.lebedi.info',			// 'BucksoGen', by Pronin Sergey (buckster at list.ru), 
		'*.loshad.info',			// 'BucksoGen', by Pronin Sergey (buckster at list.ru)
		'*.porosenok.info',			// 'BucksoGen', by Pronin Sergey (buckster at list.ru)
		'*.indyushonok.info',		// 'BucksoGen', by Pronin Sergey (buckster at list.ru)
		'*.kotyonok.info',			// 'BucksoGen', by Pronin Sergey (buckster at list.ru)
		'*.kozlyonok.info',			// 'BucksoGen', by Pronin Sergey (buckster at list.ru)
		'*.svinka.info',			// 'BucksoGen', by Pronin Sergey (buckster at list.ru)
		'*.svinya.info',			// 'BucksoGen', by Pronin Sergey (buckster at list.ru)
		'*.zherebyonok.info',		// 'BucksoGen', by Pronin Sergey (buckster at list.ru)
		'*.adult-chat-sex-cam.info',	// 'CamsGen' by Lee Chang (nebucha at model-x.com)
		'*.live-chat-cam-sex.info',		// 'CamsGen' by Lee Chang (nebucha at model-x.com)
		'*.live-nude-cam-chat.info',	// 'CamsGen' by Lee Chang (nebucha at model-x.com)
		'*.live-sex-cam-nude-chat.info',// 'CamsGen' by Lee Chang (nebucha at model-x.com)
		'*.sex-cam-live-chat-web.info',	// 'CamsGen' by Lee Chang (nebucha at model-x.com)
		'*.sex-chat-live-cam-nude.info',// 'CamsGen' by Lee Chang (nebucha at model-x.com)
		'*.sex-chat-porn-cam.info',		// by Lee Chang (nebucha at model-x.com)
	),
	//
	// by Marcello Italianore (mital at topo20.org)
	'Marcello Italianore' => array(
		'*.trevisos.org',
		'*.topo20.org',
	),
	//
	'wellcams.com' => array(
		'*.j8v9.info',
		'*.wellcams.com',
		'wellcams.biz',
	),
	//
	// by Chinu Hua Dzin (graz at rubli.biz)
	'Chinu Hua Dzin' => array(
		'*.besturgent.org',
		'*.googletalknow.org',
		'*.montypythonltd.org',
		'*.supersettlemet.org',
		'*.thepythonfoxy.org',
		'*.ukgamesyahoo.org',
		'*.youryahoochat.org',
	),
	//
	'Kikimas' => array(
		'dbsajax.org',		// by Kikimas at mail.net, Redirect to nb717.com etc
		'*.dbsajax.org',
		'acgt2005.org',		// by Kikimas at mail.net, Redirect to nb717.com etc
		'*.acgt2005.org',
		'gopikottoor.com',	// by Kikimas at mail.net, Redirect to nb717.com etc
		'*.gopikottoor.com',
		'koosx.org',		// by Kikimas at mail.net, Redirect to nb717.com etc
		'*.koosx.org',
		'mmgz.org',			// by Kikimas at mail.net, Redirect to nb717.com etc
		'*.mmgz.org',
		'zhiyehua.net',		// by Kikimas at mail.net, Redirect to nb717.com etc
		'*.zhiyehua.net',
	),
	//
	'Andrey' => array(
		'1818u.org',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
		'*.1818u.org',
		'18ew.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
		'*.18ew.info',
		'43sexx.org',		// by Andrey (vdf at lovespb.com), / was not found
		'*.43sexx.org',
		'56porn.org',		// by Andrey (vdf at lovespb.com), / was not found
		'*.56porn.org',
		'6discount.info',	// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
		'*.6discount.info',
		'78porn.org',		// by Andrey (vdf at lovespb.com), "UcoZ WEB-SERVICES"
		'*.78porn.org',
		'78rus.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
		'*.78rus.info',
		'92ssex.org',		// by Andrey (vdf at lovespb.com), "ForumGenerator"
		'*.92ssex.org',
		'93adult.org',		// by Andrey (vdf at lovespb.com), "ForumGenerator"
		'*.93adult.org',
		'buypo.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
		'*.buypo.info',
		'canadausa.info',	// by Andrey (vdf at lovespb.com), "UcoZ WEB-SERVICES"
		'*.canadausa.info',
		'cvwifw.info',		// by Andrey (vdf at lovespb.com), redirect to ifree-search.org
		'*.cvwifw.info',
		'eplot.info',		// by Beatrice C. Anderson (Beatrice.C.Anderson at spambob.com), redirect to activefreehost.com
		'*.eplot.info',
		'fuck2z.info',		// by Andrey (vdf at lovespb.com), "UcoZ WEB-SERVICES"-like design
		'*.fuck2z.info',
		'frees1.info',		// by Andrey (vdf at lovespb.com)
		'*.frees1.info',
		'freexz.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
		'*.freexz.info',
		'ifree-search.org',	// by Andrey (vdf at lovespb.com)
		'*.ifree-search.org',
		'kra1906.info',		// by Nike Borzoff (nike.borzoff at gmail.com), "UcoZ WEB-SERVICES"
		'*.kra1906.info',
		'lovespb.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
		'*.lovespb.info',
		'oursales.info',	// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
		'*.oursales.info',
		'olala18.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
		'*.olala18.info',
		'pldk.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
		'*.pldk.info',
		'pornr.info',		// by Andrey (vdf at lovespb.com), "UcoZ WEB-SERVICES"
		'*.pornr.info',
		'poz2.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
		'*.poz2.info',
		'saleqw.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
		'*.saleqw.info',
		'sexof.info',		// by Andrey (vdf at lovespb.com), "UcoZ WEB-SERVICES"
		'*.sexof.info',
		'sexz18.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
		'*.sexz18.info',
		'sexy69a.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
		'*.sexy69a.info',
		'spb78.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
		'*.spb78.info',
		'um20ax09.info',	// by Nike Borzoff (nike.borzoff at gmail.com)
		'*.um20ax09.info',
		'usacanadauk.info',	// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
		'*.usacanadauk.info',
		'v782mks.info',		// by Andrey (vdf at lovespb.com), redirect to searchadv.com
		'*.v782mks.info',
		'vny0.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
		'*.vny0.info',
		'wifes1.info',		// by Andrey (vdf at lovespb.com), redirect to activefreehost.com
		'*.wifes1.info',
		'xranvam.info',		// by Andrey (vdf at lovespb.com)
		'*.xranvam.info',
	),
	//
	'Varsylenko Vladimir and family' => array(
		'allsexonline.info',	// by Varsylenko Vladimir (vvm_kz at rambler.ru), redirect to activefreehost.com
		'*.allsexonline.info',
		'bequeous.info',	// by David C. Lack (David.C.Lack at dodgeit.com), redirect to activefreehost.com
		'*.bequeous.info',
		'goodworksite.info',	// by Varsylenko Vladimir (vvm_kz at rambler.ru), redirect to activefreehost.com
		'*.goodworksite.info',
		'rentmysite.info',	// by Varsylenko Vladimir (vvm_kz at rambler.ru), redirect to activefreehost.com
		'*.rentmysite.info',
		'sopius.info',		// by kuzmas (admin at irtes.ru), redirect to activefreehost.com
		'*.sopius.info',
		'sovidopad.info',	// by kuzmas (admin at irtes.ru), redirect to activefreehost.com
		'*.sovidopad.info',
		'superfreedownload.info',	// by Varsylenko Vladimir (vvm_kz at rambler.ru), redirect to activefreehost.com
		'*.superfreedownload.info',
		'yerap.info',		// by Kuzma V Safonov (admin at irtes.ru), redirect to activefreehost.com
		'*.yerap.info',
	),
	//
	'Andrey Zhurikov' => array(
		'*.flywebs.com',	// by Andrey Zhurikov (zhu1313 at mail.ru)
		'*.hostrim.com',	// by Andrey Zhurikov (zhu1313 at mail.ru)
		'playbit.com',		// by Andrey Zhurikov (zhu1313 at mail.ru)
	),
	//
	'Son Dittman' => array(
		'*.bsb3b.info',		// by Son Dittman (webmaster at dgo3d.info)
		'*.dgo3d.info',		// by Son Dittman (webmaster at dgo3d.info)
		'*.dgo5d.info',		// by Son Dittman (webmaster at dgo3d.info)
	),
	//
	'cooler.infomedia' => array(
		'diabetescarelink.com',	// by cooler.infomedia at gmail.com
		'firstdebthelp.com',	// by cooler.infomedia at gmail.com
	),
	//
	'Nikolajs Karpovs' => array(
		'*.pokah.lv',		// by Nikolajs Karpovs (hostmaster at astrons.com)
		'*.astrons.com',	// by Nikolaj  Karpov  (hostmaster at astrons.com)
	),
	//
	'Skar' => array(
		'implex3.com',		// by Skar (seocool at bk.ru)
		'softprof.org',		// by Skar (seocool at bk.ru)
	),
	//
	'tops.gen.in',		// Hiding google:sites. by Kosare (billing at caslim.info)
	'caslim.info',
	//
	'777-poker.biz',	// by Alexandr (foxwar at foxwar.ispvds.com), Hiding google?q=
	'*.777-poker.biz',
	'*.porn-11.com',	// by Alexandr (foxwar at foxwar.ispvds.com)
	//
	'*.conto.pl',		// by biuro at nazwa.pl
	'*.guu.pl',			// by conto.pl (domena at az.pl)
	//
	// Domains by Lin Zhi Qiang (mail at pcinc.cn)
	// NOTE: pcinc.cn -- by Lin Zhi Qiang (lin80 at 21cn.com)
	'Lin Zhi Qiang' => array(
		'bbs-qrcode.com',
		'*.bbs-qrcode.com',
		'conecojp.net',
		'*.conecojp.net',
		'gamaniaech.com',
		'*.gamaniaech.com',
		'game-fc2blog.com',
		'*.game-fc2blog.com',
		'game-oekakibbs.com',
		'*.game-oekakibbs.com',
		'games-nifty.com',
		'*.games-nifty.com',
		'gamesragnaroklink.net',
		'*.gamesragnaroklink.net',
		'gemnnammobbs.com',
		'*.gemnnammobbs.com',
		'geocitylinks.com',
		'*.geocitylinks.com',
		'homepage3-nifty.com',
		'*.homepage3-nifty.com',
		'hosetaibei.com',
		'*.hosetaibei.com',
		'jpragnarokonline.com',
		'*.jpragnarokonline.com',
		'jprmthome.com',
		'*.jprmthome.com',
		'lineage1bbs.com',
		'*.lineage1bbs.com',
		'lineage321.com',
		'*.lineage321.com',
		'netgamelivedoor.com',
		'*.netgamelivedoor.com',
		'playsese.com',
		'*.playsese.com',
		'ragnarok-game.com',
		'*.ragnarok-game.com',
		'ragnaroklink.com',
		'*.ragnaroklink.com',
		'rmt-navip.com',
		'*.rmt-navip.com',
		'roprice.com',
		'*.roprice.com',
		'watcheimpress.com',
		'*.watcheimpress.com',
	),
	//
	// by Baer (aakin at yandex.ru)
	'aakin at yandex.ru' => array(),
		'*.entirestar.com',
		'*.superbuycheap.com',
		'*.topdircet.com',
	//
	// by jiuhatu kou (newblog9 at gmail.com)
	'newblog9 at gmail.com' => array(
		'tianmieccp.com',
		'*.tianmieccp.com',
		'xianqiao.net',	
		'*.xianqiao.net',
	),
	//
	'm.frenzy at yahoo.com' => array(
		'soft2you.info',	// by Michael (m.frenzy at yahoo.com)
		'*.soft2you.info',
		'top20health.info',	// by Michael (m.frenzy at yahoo.com)
		'*.top20health.info',
		'top20ringtones.info',// by Michael (m.frenzy at yahoo.com)
		'*.top20ringtones.info',
		'v09v.info',		// by Michael (m.frenzy at yahoo.com)
		'*.v09v.info',
		'x09x.info',		// by Michael (m.frenzy at yahoo.com)
		'*.x09x.info',
	),
	//
	// by Lebedev Sergey (serega555serega555 at yandex.ru)
	'Lebedev Sergey' => array(
		'bingogoldenpalace.info',
		'*.bingogoldenpalace.info',
		'ccarisoprodol.info',
		'*.ccarisoprodol.info',
		'ezxcv.info',
		'*.ezxcv.info',
		'isuperdrug.com',
		'*.isuperdrug.com',
		'pharmacif.info',
		'*.pharmacif.info',
		'pornsexteen.biz',
		'*.pornsexteen.biz',
		'ugfds.info',
		'*.ugfds.info',
		'vviagra.info',
		'*.vviagra.info',
	),
	//
	'anatolsenator at gmail.com' => array(
		'*.cheapestviagraonline.info',	// by Anatol (anatolsenator at gmail.com)
		'*.buyphentermineworld.info',	// by Anatol (anatolsenator at gmail.com)
	),
	//
	'webmaster at mederotica.com' => array(
		'listsitepro.com',	// by VO Entertainment Inc (webmaster at mederotica.com)
		'*.listsitepro.com',
		'testviagra.org',	// by Chong Li (chongli at mederotica.com)
		'*.testviagra.org',
		'viagra-best.org',	// by Chong Li (chongli at mederotica.com)
		'*/viagra-best.org',
	),
	//
	// by Billing Name:Gray (gray at trafic.name)
	'gray at trafic.name' => array(
		'axeboxew.info',
		'*.axeboxew.info',
		'boluzuhy.info',
		'*.boluzuhy.info',
		'ekafoloz.info',
		'*.ekafoloz.info',
		'exidiqe.info',
		'*.exidiqe.info',
		'gubiwu.info',
		'*.gubiwu.info',
		'jiuuz.info',
		'*.jiuuz.info',
		'olasep.info',
		'*.olasep.info',
		'oueuidop.info',
		'*.oueuidop.info',
		'oviravy.info',
		'*.oviravy.info',
		'ragibe.info',
		'*.ragibe.info',
		'udaxu.info',
		'*.udaxu.info',
		'vubiheq.info',
		'*.vubiheq.info',
		'yvaxat.info',
		'*.yvaxat.info',
	),
	//
	'carmodelrank.com etc' => array(
		'carmodelrank.com',	// by Brianna Dunlord (briasmi at yahoo.com)
		'*.carmodelrank.com',
		'cutestories.net',	// by Brianna Dunlord (briasmi at yahoo.com)
		'*.cutestories.net',
		'sturducs.com',
		'*.sturducs.com',
		'bestother.info',	// by Tim Rennei (TimRennei at yahoo.com), redirect to amaena.com (fake-antivirus)
		'*.bestother.info',
		'yaahooo.info',		// by Alice T. Horst (Alice.T.Horst at pookmail.com), redirect to activefreehost.com
		'*.yaahooo.info',
	),
	//
	'aliacsandr85 at yahoo.com' => array(
		'freebloghost.org',		// "Free Web Hosting" by Dr. Portillo (aliacsandr85 at yahoo.com)
		'*.freebloghost.org',
		'freeprohosting.org',	// "Free Web Hosting" by Dr. Portillo (aliacsandr85 at yahoo.com)
		'*.freeprohosting.org',
		'googlebot-welcome.org',// "Free Web Hosting" by Dr. Portillo (aliacsandr85 at yahoo.com)
		'*.googlebot-welcome.org',
		'icesearch.org',		// "Free Web Hosting" by Eva Sabina Lopez Castell (aliacsandr85 at yahoo.com)
		'*.icesearch.org',
		'phpfreehosting.org',	// "Free Web Hosting" by Dr. Portillo (aliacsandr85 at yahoo.com)
		'*.phpfreehosting.org',
		'sashawww.info',		// "Free Web Hosting" by Dr. Portillo (aliacsandr85 at yahoo.com)
		'*.sashawww.info',
		'topadult10.org',		// "Free Web Hosting" by Eva Sabina Lopez Castell (aliacsandr85 at yahoo.com)
		'*.topadult10.org',
		'xer-vam.org',			// "Ongline Catalog" by Dr. Portillo (aliacsandr85 at yahoo.com)
		'*.xer-vam.org',
		'xxxse.info',			// "Free Web Hosting" by Eva Sabina Lopez Castell (aliacsandr85 at yahoo.com)
		'*.xxxse.info',
		'vvsa.org',				 // "Free Web Hosting" by Eva Sabina Lopez Castell (aliacsandr85 at yahoo.com)
		'*.vvsa.org',
	),
	//
	// Gamble: Roulette, Casino, Poker, Keno, Craps, Baccarat
	'something_gamble' => array(
		'*.atonlineroulette.com',	// by Blaise Johns
		'*.atroulette.com',			// by Gino Sand
		'*.betting-123.com',		// by Joana Caceres
		'*.betting-i.biz',			// by Joaquina Angus
		'*.casinoqz.com',			// by Berenice Snow
		'*.crapsok.com',			// by Devon Adair
		'*.dcasinoa.com',			// by August Hawkinson
		'*.e-poker-4u.com',			// by Issac Leibowitz
		'*.free-dvd-player.biz',	// by Rosario Kidd
		'*.gaming-123.com',			// by Jennifer Byrne
		'*.kenogo.com',				// by Adriane Bell
		'*.mycaribbeanpoker.com',	// by Andy Mullis
		'*.onbaccarat.com',			// by Kassandra Dunn
		'*.poker-123.com',			// by Mallory Patrick (Mallory_Patrick at marketing-support.info)
		'*.texasholdem-777.com',	// by Savanna Lederman
		'*.the-craps-100.us',		// by Lorrine Ripley
		'*.the-online-game-poker-1185.us',	// by Merna Bey
		'*.the-rule-texas-hold-em-2496.us',	// by Melvina Stamper
		'*.the-texas-strategy-holdem-1124.us',	// by Neda Frantz
	),
	//
	// Car / Home / Life / Health / Travel insurance, Loan finance, Mortgage refinance
	'something_insurance' => array(
		'0q.org',					// by Shamika Curtin
		'*.0q.org',
		'1-bookmark.com',			// by Sonia Snyder
		'*.1-bookmark.com',
		'1day-insurance.com',		// by Kelsie Strouse
		'*.1day-insurance.com',
		'1upinof.com',				// by Diego Johnson
		'*.1upinof.com',
		'18wkcf.com',				// by Lexy Bohannon
		'*.18wkcf.com',
		'2001werm.org',				// by Raphael Rayburn
		'*.2001werm.org',
		'2004heeparea1.org',		// by Dinorah Andrews
		'*.2004heeparea1.org',
		'21nt.net',					// by Jaida Estabrook
		'*.21nt.net',
		'3finfo.com',				// by Damian Pearsall
		'*.3finfo.com',
		'3somes.org',				// by Mauro Tillett
		'*.3somes.org',
		'453531.com',				// by Kurt Flannery
		'*.453531.com',
		'4freesay.com',				// by Eloy Jones
		'*.4freesay.com',
		'8-f22.com',				// by Larraine Evers
		'*.8-f22.com',
		'a40infobahn.com',			// by Amit Nguyen
		'*.a40infobahn.com',
		'a4h-squad.com',			// by Ross Locklear
		'*.a4h-squad.com',
		'aac2000.org',				// by Randi Turner
		'*.aac2000.org',
		'aaadvertisingjobs.com',	// by Luciano Frisbie
		'*.aaadvertisingjobs.com',
		'aconspiracyofmountains.com',	// by Lovell Gaines
		'*.aconspiracyofmountains.com',
		'acornwebdesign.co.uk',		// by Uriel Dorian
		'*.acornwebdesign.co.uk',
		'activel-learning-site.com',	// by Mateo Conn
		'*.activel-learning-site.com',
		'ad-makers.com',			// by Shemeka Arsenault
		'*.ad-makers.com',
		'ada-information.org',		// by Josef Osullivan
		'*.ada-information.org',
		'aequityrefinance.com',		// by Jadwiga Duckworth
		'*.aequityrefinance.com',
		'ahomeloanrefinance.com',	// by Leslie Kinser
		'*.ahomeloanrefinance.com',
		'affordablerealestate.net',	// by Season Otoole
		'*.affordablerealestate.net',
		'ahouserefinance.com',	// by Young Alley
		'*.ahouserefinance.com',
		'alderik-production.com',	// by Joan Stiles
		'*.alderik-production.com',
		'alltechdata.com',			// by Dom Laporte
		'*.alltechdata.com',
		'angelandcrown.net',		// by Claretta Najera
		'*.angelandcrown.net',
		'architectionale.com',		// by Wilbur Cornett
		'*.architectionale.com',
		'arefinancehome.com',		// by Duane Doran
		'*.arefinancehome.com',
		'arefinancinghome.com',		// by Ike Laney
		'*.arefinancinghome.com',
		'athletic-shoes-e-shop.info',	// by Romelia Money
		'*.athletic-shoes-e-shop.info',
		'auto-buy-rite.com',		// by Asuncion Buie
		'*.auto-buy-rite.com',
		'azstudies.org',			// by Bernardina Walden
		'*.azstudies.org',
		'babtrek.com',				// by Simonette Mcbrayer
		'*.babtrek.com',
		'babycujo.com',				// by Francisco Akers
		'*.babycujo.com',
		'bakeddelights.com',		// by Dave Evenson
		'*.bakeddelights.com',
		'blursgsu.com',				// by Weston Killian
		'*.blursgsu.com',
		'boreholes.org',			// by Flora Reed
		'*.boreholes.org',
		'breathingassociaiton.org',	// by Alfred Crayton
		'*.breathingassociaiton.org',
		'birdingnh.com',			// by Donald Healy
		'*.birdingnh.com',
		'bisdragons.org',			// by
		'*.bisdragons.org',
		'bronte-foods.com',			// by Kary Pfeiffer
		'*.bronte-foods.com',
		'buckscountyneighbors.org',	// by Maile Gaffney
		'*.buckscountyneighbors.org',
		'buffalofudge.com',			// by Mable Whisenhunt
		'*.buffalofudge.com',
		'burlisonforcongress.com',	// by Luann King
		'*.burlisonforcongress.com',
		'cameras-esite.info',		// by Karlee Frisch
		'*.cameras-esite.info',
		'cancerkidsforum.org',		// by 
		'*.cancerkidsforum.org',
		'ccchoices.org',			// by 
		'*.ccchoices.org',
		'cpusa364-northsacramento.com',	// by Dannette Lejeune
		'*.cpusa364-northsacramento.com',
		'diannbomkamp.com',			// by Russel Croteau
		'*.diannbomkamp.com',
		'dictionary-spanish.us',	// by Jacki Gilbreath
		'*.dictionary-spanish.us',
		'e-digital-camera-esite.info',	// by Romaine Cress
		'*.e-digital-camera-esite.info',
		'foreignrealtions.org',		// by 
		'*.foreignrealtions.org',
		'gcaaa.com',				// by Vallie Jaworski
		'*.gcaaa.com',
		'healthinsuranceem.com',	// by Justin Munson
		'*.healthinsuranceem.com',
		'ilruralassistgrp.org',		// by 
		'*.ilruralassistgrp.org',
		'ithomemortgage.com',		// by Adelaide Towers
		'*.ithomemortgage.com',
		'iyoerg.com',				// by 
		'*.iyoerg.com',
		'maryandfrank.org',			// by Theodore Apodaca
		'*.maryandfrank.org',
		'mysteryclips.com',			// by Edward Ashford
		'*.mysteryclips.com',
		'nysdoed.org',				// by 
		'*nysdoed.org',
		'nytech-ir.com',			// by Adrien Beals
		'*.nytech-ir.com',
		'online-pills-24x7.biz',	// by Aide Hallock
		'*.online-pills-24x7.biz',
		'onlinehomeloanrefinance.com',	// by Chaz Lynch
		'*.onlinehomeloanrefinance.com',
		'onlinehomeloanfinancing.com',	// by Humbert Eldridge
		'*.onlinehomeloanfinancing.com',
		'onunicarehealthinsurance.com',	// by  Lawerence Paredes
		'*.onunicarehealthinsurance.com',
		'pet-stars.com',			// by Carmon Luevano
		'*.pet-stars.com',
		'quicktvr.com',				// by Vernell Crenshaw
		'*.quicktvr.com',
		'richcapaldi.com',			// by Kya Haggard
		'*.richcapaldi.com',
		'shoes-shop.us',			// by Austen Higginbotham
		'*.shoes-shop.us',
		'top-finance-sites.com',	// by Maryann Doud
		'*.top-finance-sites.com',
	),
	//
	// Drugs / Pills
	'something_drugs' => array(
		'fn-nato.com',				// by Donny Dunlap
		'*.fn-nato.com',
		'fantasticbooks-shop.com',	// by Kermit Ashley
		'*.fantasticbooks-shop.com',
	),
	//
	'Cortez and family' => array(
		'dronadaarsujf.info',	// by Cortez Shinn (info at goorkkjsaka.info)
		'*.dronadaarsujf.info',
		'fromnananaref.info',	// by Cortez Shinn (info at goorkkjsaka.info)
		'*.fromnananaref.info',
		'goorkkjsaka.info',		// by Cortez Shinn (info at goorkkjsaka.info)
		'*.goorkkjsaka.info',
		'jkdfjjkkdfe.info',		// by Rico Laplant (info at nnjdksfornms.info)
		'*.jkdfjjkkdfe.info',
		'jkllloldkjsa.info',	// by Cortez Shinn (info at goorkkjsaka.info)
		'*.jkllloldkjsa.info',
		'nnjdksfornms.info',	// by Rico Laplant (info at nnjdksfornms.info)
		'*.nnjdksfornms.info',
		'mcmdkkksaoka.info',	// by Cortez Shinn (info at goorkkjsaka.info)
		'*.mcmdkkksaoka.info',
		'srattaragfon.info',	// by Cortez Shinn (info at goorkkjsaka.info)
		'*.srattaragfon.info',
		'yreifnnonoom.info',	// by Rico Laplant (info at nnjdksfornms.info)
		'*.yreifnnonoom.info',
		'zjajjsvgeuds.info',	// by Cortez Shinn (info at goorkkjsaka.info)
		'*.zjajjsvgeuds.info',
	),
	//
	// by Harvey Pry (admin at ematuranza.com)
	'Harvey Pry' => array(
		'ancorlontano.com',		
		'*.ancorlontano.com',
		'dentroallago.com',
		'*.dentroallago.com',
		'digiovinezza.com',
		'*.digiovinezza.com',
		'ematuranza.com',
		'*.ematuranza.com',
		'ilfango.com',
		'*.ilfango.com',
		'nullarimane.com',
		'*.nullarimane.com',
		'questaimmensa.com',
		'*.questaimmensa.com',
		'tentailvolo.com',
		'*.tentailvolo.com',
		'unatenerezza.com',
		'*.unatenerezza.com',
		'volgondilettose.com',
		'*.volgondilettose.com',
	),
	//
	// by Cornelius Boyers (admin at edeuj84.info)
	'Cornelius Boyers' => array(
		'bid99df.info',
		'*.bid99df.info',
		'bj498uf.info',
		'*.bj498uf.info',
		'edeuj84.info',
		'*.edeuj84.info',
		'f4mfid.info',
		'*.f4mfid.info',
		'g4vf03a.info',
		'*.g4vf03a.info',
		'j09j4r.info',
		'*.j09j4r.info',
		'jv4r8hv.info',
		'*.jv4r8hv.info',
		'k43sd3.info',
		'*.k43sd3.info',
		'k4r84d.info',
		'*.k4r84d.info',
		'k4rvda.info',
		'*.k4rvda.info',
		'k4v0df.info',
		'*.k4v0df.info',
		'k903os.info',
		'*.k903os.info',
		'k9df93d.info',
		'*.k9df93d.info',
		'kv94fd.info',
		'*.kv94fd.info',
		'ksjs93.info',
		'*.ksjs93.info',
		'l0ks03.info',
		'*.l0ks03.info',
		'l9u3jc.info',
		'*.l9u3jc.info',
		'lv043a.info',
		'*.lv043a.info',
		'nh94h9.info',
		'*.nh94h9.info',
		'm94r9d.info',
		'*.m94r9d.info',
		's87fvd.info',
		'*.s87fvd.info',
		'v3k0d.info',
		'*.v3k0d.info',
		'v4r8j4.info',
		'*.v4r8j4.info',
		'vf044s.info',
		'*.vf044s.info',
		'vj49rs.info',
		'*.vj49rs.info',
		'vk498j.info',
		'*.vk498j.info',
		'u03jow.info',
		'*.u03jow.info',
	),
	//
	'Nikhil and family' => array(
		'cnewuhkqnfke.info',	// by Nikhil Swafford (info at jhcjdnbkrfo.info), / was not found
		'*.cnewuhkqnfke.info',
		'cijkalvcjirem.info',	// by Gerardo Figueiredo (info at jikpbtjiougje.info), / was not found
		'*.cijkalvcjirem.info',
		'ihfjeswouigf.info',	// by Brian Dieckman (info at iudndjsdhgas.info), / was not found
		'*.ihfjeswouigf.info',
		'iudndjsdhgas.info',	// by Brian Dieckman (info at iudndjsdhgas.info), / was not found
		'*.iudndjsdhgas.info',
		'iufbsehxrtcd.info',	// by Brian Dieckman (info at iudndjsdhgas.info), / was not found
		'*.iufbsehxrtcd.info',
		'itxbsjacun.info',		// by Nikhil Swafford (info at jhcjdnbkrfo.info), / was not found
		'*.itxbsjacun.info',
		'jahvjrijvv.info',		// by Nikhil Swafford (info at jikpbtjiougje.info), / was not found
		'*.jahvjrijvv.info',
		'jiatdbdisut.info',		// by Brian Dieckman (info at iudndjsdhgas.info), / was not found
		'*.jiatdbdisut.info',
		'jkfierwoundhw.info',	// by Brian Dieckman (info at iudndjsdhgas.info), / was not found
		'*.jkfierwoundhw.info',
		'jhcjdnbkrfo.info',		// by Nikhil Swafford (info at jhcjdnbkrfo.info), / was not found
		'*.jhcjdnbkrfo.info',
		'jikpbtjiougje.info',	// by Julio Mccaughey (info at jikpbtjiougje.info), / was not found
		'*.jikpbtjiougje.info',
			'kfjeoutweh.info',		// by Brian Dieckman (info at iudndjsdhgas.info), / was not found
		'*.kfjeoutweh.info',
			'najedncdcounrd.info',	// by Nikhil Swafford (info at jhcjdnbkrfo.info), / was not found
		'*.najedncdcounrd.info',
		'ncjsdhjahsjendl.info',	// by Brian Dieckman (info at iudndjsdhgas.info), / was not found
		'*.ncjsdhjahsjendl.info',
		'nkcjfkvnvpow.info',	// by Gerardo Figueiredo (info at jikpbtjiougje.info), / was not found
		'*.nkcjfkvnvpow.info',
		'nmiiamfoujvnme.info',	// by Gerardo Figueiredo (info at jikpbtjiougje.info), / was not found
		'*.nmiiamfoujvnme.info',
		'nxuwnkajgufvl.info',	// by Gerardo Figueiredo (info at jikpbtjiougje.info), / was not found
		'*.nxuwnkajgufvl.info',
		'mcsjjaouvd.info',		// by Nikhil Swafford (info at jhcjdnbkrfo.info), / was not found
		'*.mcsjjaouvd.info',
		'mkjajkfoejvnm.info',	// by Gerardo Figueiredo (info at jikpbtjiougje.info), / was not found
		'*.mkjajkfoejvnm.info',
		'oudjskdwibfm.info',	// by Brian Dieckman (info at iudndjsdhgas.info), / was not found
		'*.oudjskdwibfm.info',
		'oujvjfdndl.info',		// by Nikhil Swafford (info at jhcjdnbkrfo.info), / was not found
		'*.oujvjfdndl.info',
		'uodncnewnncds.info',	// by Nikhil Swafford (info at jhcjdnbkrfo.info), / was not found
		'*.uodncnewnncds.info',
	),
	//
	'something_noapp' => array(
		'auctioncarslisting.com',	// "No application configured at this url." by John Davis
		'*.auctioncarslisting.com',
		'buy-cheap-hardware.com',	// "No application configured at this url." by Tim Morison (domains at sunex.ru)
		'*.buy-cheap-hardware.com',
		'carsgarage.net',			// "No application configured at this url." by Zonen Herms, and Jimmy Todessky (seomate at gmail.com)
		'*.carsgarage.net',
		'digitshopping.net',		// "No application configured at this url." by Zonen Herms, and Jimmy Todessky (seomate at gmail.com)
		'*.digitshopping.net',
		'your-insurance.biz',		// "No application configured at this url." by Jimmy Todessky (seomate at gmail.com)
		'*.your-insurance.biz',
	),
	//
	// by Henry Ford (wealth777 at gmail.com)
	'Henry Ford' => array(
		'brutal-forced.com',
		'*.brutal-forced.com',
		'library-bdsm.com',
		'*.library-bdsm.com',
	),
	//
	// by Croesus International Inc. (olex at okhei.net)
	'Croesus International Inc.' => array(
		'purerotica.com',
		'*.purerotica.com',
		'servik.net',		// by Croesus International Inc. (olex at okhei.net)
		'*.servik.net',
		'withsex.com',		// by Croesus International Inc. (olex at okhei.net)
		'*.withsex.com',
	),

	// C-2: Lonely domains (buddies not found yet)
	'0nline-porno.info',	// by Timyr (timyr at narod.ru)
	'*.0nline-porno.info',
	'1111mb.com',
	'*.1111mb.com',
	'19cellar.info',	// by Eduardo Guro (boomouse at gmail.com)
	'6i6.de',
	'*.6i6.de',
	'*.advancediet.com',// by Shonta Mojica (hostadmin at advancediet.com)
	'adultpersonalsclubs.com',	// by Peter (vaspet34 at yahoo.com)
	'*.adultpersonalsclubs.com',
	'alfanetwork.info',	// by dante (dantequick at gmail.com)
	'*.alfanetwork.info',
	'*.areaseo.com',	// by Antony Carpito (xcentr at lycos.com)
	'awardspace.com',	// by abuse at awardspace.com, no DirectoryIndex
	'*.awardspace.com',
	'*.baurish.info',
	'bestdiscountpharmacy.biz',	// by John  Brown (john780321 at yahoo.com), 2007-01-27, 61.144.122.45
	'bloggerblast.com',	// by B. Kadrie (domains at starwhitehosting.com)
	'*.businessplace.biz',	// by Grenchenko Ivan Petrovich (eurogogi at yandex.ru)
	'covertarena.co.uk',// by Wayne Huxtable
	'd999.info',		// by Peter Vayner (peter.vayner at inbox.ru)
	'*.d999.info',
	'*.dlekei.info',	// by Maxima Bucaro (webmaster at tts2f.info)
	'*.discutbb.com',	// by Perez Thomas (thomas.jsp at libertysurf.fr)
	'dreamteammoney.com',	// dtmurl.com related
	'drug-shop.us',		// by Alexandr (matrixpro at mail.ru)
	'*.drug-shop.us',
	'drugs-usa.info',	// by Edward SanFilippo (Edward.SanFilippo at gmail.com), redirect to activefreehost.com
	'*.drugs-usa.info',
	'*.ec51.com',		// by zhenfei chen (szczffhh_sso at 21cn.net)
	'ex-web.net',		// RMT by ex co,ltd (rmt at ex-web.net)
	'*.ex-web.net',
	'fastppc.info',		// by peter conor (fastppc at msn.com)
	'*.fateback.com',	// by LiquidNet Ltd. Redirect to www.japan.jp
	'*.free-finding.com',	// by Ny hom (nyhom at yahoo.com)
	'*.free-rx.net',	// by Neo-x (neo-xxl at yandex.ru), redirect to activefreehost.com
	'*.google-yahoo-msn.org',	// by Equipe Tecnica Ajato (rambap at yandex.ru)
	'*.hot4buy.org',	// by Hot Maker (jot at hot4buy.org)
	'hotnetinfo.info',	// by Lisa Edwards (lisaedwards at ledw.th)
	'hotscriptonline.info',	// by Psy Search (admin at psysearch.com)
	'*.hut1.ru',		// by domains at agava.com
	'*.incbuy.info',	// by Diego T. Murphy (Diego.T.Murphy at incbuy.info)
	'investorvillage.com',
	'ismarket.com',		// Google-hiding. intercage.com related IP
	'italialiveonline.info',	// by Silvio Cataloni (segooglemsn at yahoo.com), redirect to activefreehost.com
	'italy-search.org',	// by Alex Yablin (zaharov-alex at yandex.ru)
	'*.italy-search.org',
	'*.jimka-mmsa.com',	// by Alex Covax (c0vax at mail.ru)
	'*.ls.la',			// by Milton McLellan (McLellanMilton at yahoo.com)
	'myfgj.info',		// by Filus (softscript at gmail.com)
	'*.mujiki.com',		// by Mila Contora (ebumsn at ngs.ru)
	'ngfu2.info',		// by Tara Lagrant (webmaster at ngfu2.info)
	'*.ngfu2.info',
	'onlin-casino.com',	// by Lomis Konstantinos (businessline3000 at gmx.de)
	'*.onlin-casino.com',
	'ornit.info',		// by Victoria C. Frey (Victoria.C.Frey at pookmail.com)
	'*.ornit.info',
	'*.pahuist.info',	// by Yura (yuralg2005 at yandex.ru)
	'*.perevozka777.ru',	// by witalik at gmail.com
	'php0h.com',		// by Byethost Internet Ltd. (hostorgadmin at googlemail.com)
	'*.php0h.com',
	'portaldiscount.com',	// by Mark Tven (bestsaveup at gmail.com)
	'*.portaldiscount.com',
	'*.prama.info',		// by Juan.Kang at mytrashmail.com
	'qoclick.net',		// by DMITRIY SOLDATENKO
	'relurl.com',		// tiny-like. by Grzes Tlalka (grzes1111 at interia.pl)
	'*.replicaswatch.org', // by Replin (admin at furnitureblog.org)
	'*.roin.info',		// by Evgenius (roinse at yandex.ru)
	'*.seek-www.com',	// by Adam Smit (pingpong at mail.md)
	'sexmaniacs.org',	// by Yang Chong (chong at x-india.com)
	'*.sexmaniacs.org',
	'sirlook.com',
	'tabsdrugstore.info',	// by Jonn Gardens (admin at SearchHealtAdvCorpGb.com -- no such domain)
	'*.tabsdrugstore.info',
	'*.thetinyurl.com',	// by Beth J. Carter (Beth.J.Carter at thetinyurl.com)
	'topmeds10.com',
	'*.topmeds10.com',
	'unctad.net',		// by gfdogfd at lovespb.com
	'*.vacant.org.uk',
	'*.webnow.biz',		// by Hsien I Fan (admin at servcomputing.com)
	'wellcams.biz',		// by Sergey Sergiyenko (studioboss at gmail.com)
	'*.xpacificpoker.com',// by Hubert Hoffman (support at xpacificpoker.com)
	'zlocorp.com',		// by tonibcrus at hotpop.com, spammed well with "http ://zlocorp.com/"
	'*.zlocorp.com',

	// C-3: Not classifiable (information wanted)
	//
	// Something incoming to pukiwiki related sites
	'nana.co.il related' => array(
		'planetnana.co.il',
		'*.nana.co.il',
	),
	'mylexus.info',		// by Homer Simpson (simhomer12300 at mail.com), Redirect to Google
	'up2.co.il',		// inetwork.co.il related
	'*.up2.co.il',

	// D: Sample setting of
	// "third party in good faith"s
	//
	// Hosts shown inside of the implanted contents,
	// not used via spam, but maybe useful to detect these contents
	//
	// 'RESERVED',


	// Z: Yours
	//
	//'',
	//'',
	//'',


);
?>
