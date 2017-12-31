//make need to set inhereit to true

//remember to add flags to moves relevent to below abilities

'use strict';

exports.BattleAbilities = {


  "buoyant": {
    inherit: false,
    desc: "Reduces damage taken from contact moves by 15%.",
    shortDesc: "Reduces damage taken from contact moves by 15%.",
    onSourceModifyDamage: function (damage, source, target, move) {
			if (move.flags['contact']) {
				return this.chainModify(0.85);
			}
		},
    id: "buoyant",
		name: "Buoyant",
		rating: 3,
		num: 501,
  },

  "deadlysting":{
    inherit: false,
    desc: "STAB bonus is also applied to Poison-type moves.",
    shortDesc: "STAB bonus is also applied to Poison-type moves.",
    onBasePower: function (basePower, attacker, defender, move) {
  			if (move.type === 'Poison') {
  				return this.chainModify(1.5);
  			}
  		},
    id: "deadlysting",
    name: "Deadly Sting",
    rating: 3,
    num: 502,
  },

  "deepfreeze": {
    desc: "When this Pokemon has 1/3 or less of its maximum HP, rounded down, its attacking stat is multiplied by 1.5 while using a Ice-type attack.",
    shortDesc: "At 1/3 or less of its max HP, this Pokemon's attacking stat is 1.5x with Ice attacks.",
    onModifyAtkPriority: 5,
    onModifyAtk: function (atk, attacker, defender, move) {
      if (move.type === 'Ice' && attacker.hp <= attacker.maxhp / 3) {
        this.debug('DeepFreeze boost');
        return this.chainModify(1.5);
      }
    },
    onModifySpAPriority: 5,
    onModifySpA: function (atk, attacker, defender, move) {
      if (move.type === 'Ice' && attacker.hp <= attacker.maxhp / 3) {
        this.debug('DeepFreeze boost');
        return this.chainModify(1.5);
      }
    },
    id: "deepfreeze",
    name: "Deep Freeze",
    rating: 2,
    num: 503,
  },

  "dirtyjaws": {
		desc: "Bite moves have a 50% chance to (regular) poison.",
		shortDesc: "Bite moves have a 50% chance to (regular) poison.",
		onBasePowerPriority: 8,
		onModifyMove: function (move) {
			if (move.flags['bite']) {
        if (!move.secondaries) {
				move.secondaries = [];
			}
			move.secondaries.push({
				chance: 50,
				status: 'psn',
				ability: this.getAbility('dirtyjaws'),
			});
			}
		},
		id: "dirtyjaws",
		name: "Dirty Jaws",
		rating: 3,
		num: 504,
	},

  "fencer": {
		desc: "Increases the power of certain moves by 20%.",
		shortDesc: "Increases the power of certain moves by 20%.",
		onBasePowerPriority: 8,
		onBasePower: function (basePower, attacker, defender, move) {
			if (move.flags['fencing']) {
			   return this.chainModify(1.2);
			}
		},
		id: "ferncer",
		name: "Fencer",
		rating: 3,
		num: 505,
	},

  //code for penetrate

  "precipitation": {
		desc: "20% increase to power of various weather-related moves.",
		shortDesc: "20% increase to power of various weather-related moves.",
		onBasePowerPriority: 8,
		onBasePower: function (basePower, attacker, defender, move) {
			if (move.flags['precipitation']) {
			   return this.chainModify(1.2);
			}
		},
		id: "precipitation",
		name: "Precipitation",
		rating: 3,
		num: 507,
	},

  "scraprecycler ": { //may not work
    desc: "Its attacks heal 33% of damage dealt if the opponent is a Steel-type.",
    shortDesc: "Its attacks heal 33% of damage dealt if the opponent is a Steel-type.",
    onAfterDamageOrder: 1,
    onSourceAfterDamage: function (damage, target, source, move) {
			if (target.hasType('Steel')){
        source.heal(damage/3);
      }
		},
    id: "scraprecycler",
		name: "Scrap Recycler",
		rating: 3,
		num: 508,
	},

  "shortcircuit": {
    desc: "When this Pokemon has 1/3 or less of its maximum HP, rounded down, its attacking stat is multiplied by 1.5 while using a Electric-type attack.",
    shortDesc: "At 1/3 or less of its max HP, this Pokemon's attacking stat is 1.5x with Electric attacks.",
    onModifyAtkPriority: 5,
    onModifyAtk: function (atk, attacker, defender, move) {
      if (move.type === 'Electric' && attacker.hp <= attacker.maxhp / 3) {
        this.debug('short circuit boost');
        return this.chainModify(1.5);
      }
    },
    onModifySpAPriority: 5,
    onModifySpA: function (atk, attacker, defender, move) {
      if (move.type === 'Electric' && attacker.hp <= attacker.maxhp / 3) {
        this.debug('short circuit boost');
        return this.chainModify(1.5);
      }
    },
    id: "shortcircuit",
    name: "ShortCircuit",
    rating: 2,
    num: 509,
  },

  //sleuth can't be coded as of 12/30/17. Blame Disaster Area

  "thunderthighs": {
		desc: "Increases the power of kicking moves by 20%.",
		shortDesc: "Increases the power of kick moves by 20%.",
		onBasePowerPriority: 8,
		onBasePower: function (basePower, attacker, defender, move) {
			if (move.flags['kick']) {
			   return this.chainModify(1.2);
			}
		},
		id: "thunderthighs",
		name: "Thunder Thighs",
		rating: 3,
		num: 511,
	},

  "mystichealing": {
    shortDesc: "This Pokemon is not affected by the secondary effect of another Pokemon's attack.",
    onModifySecondaries: function (secondaries) {
      this.debug('Mystic Healing prevent secondary');
      return secondaries.filter(effect => !!(effect.self || effect.dustproof));
    },
    id: "mystichealing",
    name: "Mystic Healing",
    rating: 3,
    num: 512,
  },

  "spiny": {
		desc: "Pokemon making contact with this Pokemon lose 1/8 of their maximum HP, rounded down.",
		shortDesc: "Pokemon making contact with this Pokemon lose 1/8 of their max HP.",
		onAfterDamageOrder: 1,
		onAfterDamage: function (damage, target, source, move) {
			if (source && source !== target && move && move.flags['contact']) {
				this.damage(source.maxhp / 8, source, target);
			}
		},
		id: "spiny",
		name: "Spiny",
		rating: 3,
		num: 513,
	},

  "vigilant": {
    shortDesc: "This Pokemon cannot be struck by a critical hit.",
    onCriticalHit: false,
    id: "vigilant",
    name: "Vigilant",
    rating: 1,
    num: 514,
  },

};
